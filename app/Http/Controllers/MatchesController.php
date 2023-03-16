<?php

namespace App\Http\Controllers;

use App\Models\answers;
use App\Models\employee;
use App\Models\jobCategory;
use App\Models\jobOffer;
use App\Models\User;
use App\Models\employer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

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
                $jobofferEmployee->matchPercentage = (int)$matchPercentage;
                $score = 0;
                // for each joboffer calculate the match
                // add the match to an array where you can see all the matches in
            }
        }
//        if ($id == 1){
//            $joboffersEmployee = $joboffersEmployee->sortBy('created_at');
//        }
//        elseif ($id == 2){
//            $joboffersEmployee->sortBy('created_at');
//        }elseif ($id == 3){
//
//        }elseif($id == 4){
//            $joboffersEmployee->orderBy('created_at', 'desc');
//        }else{
//            return view('matches/index',[
//                'joboffersEmployee' => $jobofferEmployee,
//            ]);
//        }
//        $currentUrl = url()->current();
        $url = URL::current();
        $parts = Explode('/', $url);
        $id = $parts[count($parts) - 2];
        if ($id == "dashboard"){
            return view('matches/index',[
                'joboffersEmployee' => $joboffersEmployee,
            ]);
        }elseif($id == "admin"){
            return view('adminportal/pages/matches/index',[
                'joboffersEmployee' => $joboffersEmployee,
            ]);
        }else{

        }
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
    public function single($id){
        $jobOffer = jobOffer::with('employer')->find($id);
        $user = $jobOffer->employer->user;
        return view('matches.single', [
            'jobOffer' => $jobOffer,
            'user' => $user
        ]);
    }
}
