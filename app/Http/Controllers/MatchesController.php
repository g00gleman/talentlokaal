<?php

namespace App\Http\Controllers;

use App\Models\answers;
use App\Models\employee;
use App\Models\jobCategory;
use App\Models\jobOffer;
use App\Models\support;
use App\Models\User;
use App\Models\employer;
use App\Models\news;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

class MatchesController extends Controller
{
    //
    public function index($id = null)
    {


        // check if the user is an employer or employee
        $user = User::with('employee', 'employer')->find(Auth::id());
        $employee = $user->employee;


        // match vars that we need to calculate the answer
        // start with a score of 0
        $score = 0;
        // the max score for each question
        $scoreMax = 3;
        // the max total score means 9 questions times the maxscore of the question (9*3)
        $ScoreTotal = 27;

        $answersEmployee = $employee->answers;

        $url = URL::current();
        $parts = Explode('/', $url);
        $urlId = $parts[count($parts) - 2];
        // if the url is dashboard do all the following things
        if ($urlId == "dashboard") {
            if (isset($employee)) {
                // get the answers of the employee survey

                // the joboffers from the sector which the employee also has
                $joboffersEmployee = $employee->jobCategorie->jobOffer;
                // of all the joboffers as a single joboffer
                foreach ($joboffersEmployee as $jobofferEmployee) {
                    // get all the answers of one joboffer

                    $answersJoboffer = $jobofferEmployee->answers;

                    // compare the 9 answers from the joboffer with the 9 answers from the employee in the survey
                    foreach ($answersJoboffer as $answerJoboffer) {
                        foreach ($answersEmployee as $answerEmployee) {
                            // calculate the diff between the 2 scores
                            if ($answerEmployee->questionId == $answerJoboffer->questionId) {
                                $scoredifference = $answerEmployee->score - $answerJoboffer->score;
                                // if the difference is a negative number make it positive (-2 = 2)
                                if ($scoredifference < 0) {
                                    $scoredifference = abs($scoredifference);
                                }
                                // get the max score for a single question and distract it with the difference
                                $addScore = $scoreMax - $scoredifference;
                                // add the score to the total score of the jobOffer
                                $score = $score + $addScore;
                            }
                        }
                    }
                    // calculate the total answer of a single match
                    $matchPercentage = $score / $ScoreTotal * 100;
                    // if the total answer is lower than 60 procent
                    if ($matchPercentage > 60) {
                        // then add filterjobbofer = true
                        $jobofferEmployee->filterJoboffer = true;
                    }
                    // make from the percentage a whole digit without any decimals
                    $jobofferEmployee->matchPercentage = (int)$matchPercentage;

                    // reset the score var, so it add up to the other joboffer matches
                    $score = 0;
                }
            }
            // filters
            // get the best 60 procent jobOffers
            $filteredJobOffers = $joboffersEmployee->where('filterJoboffer', true);
            // apply these filters on the best 60 procent jobOffers

            $filters = [1 => $filteredJobOffers->sortByDesc('created_at'),
                        2 => $filteredJobOffers->sortBy('created_at'),
                        3 => $filteredJobOffers->sortByDesc('matchPercentage'),
                        4 => $filteredJobOffers->sortBy('matchPercentage')
                        ];

            // if there is no filter
            if ($id == null) {
                return view('matches/index', [
                    'joboffersEmployee' => $filteredJobOffers,
                ]);

                // if there is a filter get the id of the filter
            } else {
                return view('matches/index', [
                    'joboffersEmployee' => $filters[$id],
                ]);
            }
        }
        // if the url is admin do all the following things
        elseif ($urlId == "admin") {
            return view('adminportal/pages/matches/index', []);
        }
    }

    public function employer($id = null){


        $employer = Auth::user()->employer;
        $jobOffers = $employer->jobOffers;


        // match vars that we need to calculate the answer
        // start with a score of 0
        $score = 0;
        // the max score for each question
        $scoreMax = 3;
        // the max total score means 9 questions times the maxscore of the question (9*4)
        $ScoreTotal = 27;

        $filterEmployeesArray = [];

        foreach ($jobOffers as $jobOffer){

            $answersJoboffer = $jobOffer->answers;
            $employeesJoboffer = $jobOffer->jobCategorie->employee;

            foreach ($employeesJoboffer as $employee){

                $answersEmployee = $employee->answers;

                foreach ($answersEmployee as $answerEmployee){

                    foreach ($answersJoboffer as $answerJoboffer){

                        if ($answerEmployee->questionId == $answerJoboffer->questionId) {
                            $scoredifference = $answerEmployee->score - $answerJoboffer->score;
                            // if the difference is a negative number make it positive (-2 = 2)
                            if ($scoredifference < 0) {
                                $scoredifference = abs($scoredifference);
                            }
                            // get the max score for a single question and distract it with the difference
                            $addScore = $scoreMax - $scoredifference;
                            // add the score to the total score of the jobOffer
                            $score = $score + $addScore;
                        }
                    }
                }
                // calculate the total answer of a single match
                $matchPercentage = $score / $ScoreTotal * 100;
                // if the total answer is lower than 60 procent
                if ($matchPercentage > 60) {
                    // then add filterjobbofer = true
                    $employee->filterEmployee = true;
                }
                // make from the percentage a whole digit without any decimals
                $employee->matchPercentage = (int)$matchPercentage;

                // reset the score var, so it add up to the other joboffer matches
                $score = 0;
            }
            // filters
            // get the best 60 procent jobOffers
            $filterEmployees = $employeesJoboffer->where('filterEmployee', true);
            $filterEmployeesArray = [$filterEmployees];

        }
        // if there is no filter
        if (empty($filterEmployeesArray)) $filterEmployeesArray[0] = [];
        if ($id == null) {
            return view('matches/employermatch', [
                'employees' => $filterEmployeesArray[0],
            ]);

            // if there is a filter get the id of the filter
        }

    }

    public function show($id)
    {
        $match = answers::find($id);

        return view('matches/single')->with('match', $match);
    }
    public function home()
    {
        $user = Auth::user();
        $items = news::all()->take(10);
        $employee = $user->employee;
        $employer = $user->employer;
        if ($employee) {
            $joboffers = $employee->jobCategorie->jobOffer->take(5);
            return view('homepage')->with([
                'joboffers' => $joboffers,
                'items' => $items,
            ]);
        } elseif($employer) {
            $jobOffers = $employer->jobOffers;
            $firstEmployerofJoboffers = [];
            foreach ($jobOffers as $jobOffer){
                $employeesJoboffer = $jobOffer->jobCategorie->employee->first();
                if ($employeesJoboffer !== null) {
                    $firstEmployerofJoboffers[] = $employeesJoboffer;
                }
            }
            return view('homepage', [
                'firstEmployerofJoboffers' => $firstEmployerofJoboffers,
                'items' => $items,
            ]);
        }else{
            return redirect('/admin/dashboard');
        }
    }
    public function single($id)
    {
        $jobOffer = jobOffer::with('employer')->find($id);
        $user = $jobOffer->employer->user;
        $support = support::first();
        return view('matches.single', [
            'jobOffer' => $jobOffer,
            'user' => $user,
            'support' => $support
        ]);
    }

    public function singeEmployer($id){
        $employee = employee::with('user')->find($id);
        $support = support::first();
        return view('matches.singleEmployer', [
            'employee' => $employee,
            'support' => $support
        ]);
    }

}
