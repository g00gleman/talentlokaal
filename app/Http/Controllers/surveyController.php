<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class surveyController extends Controller
{
    // return view of Survey
    public function displaySurvey(){
        return view('survey.index');
    }

}
