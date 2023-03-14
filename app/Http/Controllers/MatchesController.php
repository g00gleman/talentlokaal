<?php

namespace App\Http\Controllers;

use App\Models\answers;
use App\Models\employee;
use App\Models\jobCategory;
use App\Models\jobOffer;
use App\Models\User;
use Database\Seeders\employer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MatchesController extends Controller
{
    //
    public function index(){
        // check if the user is an employer or employee
        $user = User::with('employee', 'employer')->find(Auth::id());
        $employee = $user->employee;

        // match vars that we need to calculate the answer
        // start with a score of 0
        $score = 0;
        $scoreArray = [];
        // the max score for each question
        $scoreMax = 3;
        // the max total score means 9 questions times the maxscore of the question (9*4)
        $ScoreTotal = 36;

        $answersEmployee = $employee->answers;

        if (isset($employee)){
            // get the answers of the employee survey

            // the joboffers from the sector which the employee also has
            $joboffersEmployee = $employee->jobCategorie->jobOffer;
            // of all the joboffers as a single joboffer
            foreach ($joboffersEmployee as $jobofferEmployee){
                // get all the answers of one joboffer
                $jobOfferEmployeeId = $jobofferEmployee->id;

                $answersJoboffer = answers::where('jobOfferId', $jobOfferEmployeeId)->get();

//                dd($answersJoboffer);
                // compare the 9 answers from the joboffer with the 9 answers from the employee in the survey
                foreach ($answersJoboffer as $answerJoboffer){
                    foreach($answersEmployee as $answerEmployee){
                        // calculate the diff between the 2 scores
                        if($answerEmployee->questionId == $answerJoboffer->questionId){
                            $scoredifference = $answerEmployee->score - $answerJoboffer->score;


                            // if the difference is a negative number make it positive (-2 = 2)
                            if ($scoredifference < 0) {
                                $scoredifference = abs($scoredifference);
                            }

                            $addScore = $scoreMax - $scoredifference;

                            $score = $score + $addScore;
                        }

                    }
                }
                $matchPercentage = $score/$ScoreTotal*100;
                $scoreArray[$jobOfferEmployeeId] = $matchPercentage;
                $score = 0;
                // for each joboffer calculate the match
                // add the match to an array where you can see all the matches in
            }
        }
        dd($scoreArray);
        return view('matches/index',[
            'matchPercentage' => $matchPercentage,
        ]);
    }
    public function show($id){
        $match = answers::find($id);

        return view('matches/single')->with('match', $match);
    }
    public function home(){
        $user = Auth::user();
        $employee = $user->employee;
        if($employee){
        $joboffers = $employee->jobCategorie->jobOffer;
        return view('homepage')->with([
            'joboffers' => $joboffers,
        ]);
        }else{
            return view('homepage');
        }

    }
}
