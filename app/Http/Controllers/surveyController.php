<?php

namespace App\Http\Controllers;

use App\Models\questions;
use Illuminate\Http\Request;

class surveyController extends Controller
{
    // return view of Survey
    public function displaySurvey(){
        $questions = questions::all();
        return view('survey.index')->with([
            'questions' => $questions,
        ]);
    }

}
