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
        $user = Auth::user();
        $employee = $user->employee;
        $employer = $user->employer;

        // match vars that we need to calculate the answer
        // start with a score of 0
        $score = 0;
        // the max score for each question
        $scoreMax = 4;
        // the max total score means 9 questions times the maxscore of the question (9*4)
        $ScoreTotal = 36;

        if (isset($employee)){
            // get the answers of the employee survey
            $answersEmployee = $employee->anwers;
            // the joboffers from the sector which the employee also has
            $joboffersEmployee = $employee->jobCategorie->jobOffer;
            // of all the joboffers as a single joboffer
            foreach ($joboffersEmployee as $jobofferEmployee){
                // get all the answers of one joboffer
                $answersJoboffer = answers::where('jobOfferId', $jobofferEmployee->id)->get('score');
                // compare the 9 answers from the joboffer with the 9 answers from the employee in the survey
                foreach ($answersJoboffer as $answerJoboffer){
                    foreach($answersEmployee as $answerEmployee){
                        // calculate the diff between the 2 scores
                        $scoredifference = $answerEmployee->score - $answerJoboffer->score;
                        // the difference - the max score = the score
                        $addScore = $scoreMax - $scoredifference;
                        // add the score to the total match score
                        $score = $score + $addScore;
                    }
                }
            }
        }
        $score = $score/3;
        $matchPercentage = $score/$ScoreTotal*100;
        $match = 100 - $matchPercentage;
        dd($match);
        return view('matches/index');
    }
    public function show($id){
        $match = answers::find($id);

        return view('matches/single')->with('match', $match);
    }
    public function home(){
        $employee = Auth::user()->employee;
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
