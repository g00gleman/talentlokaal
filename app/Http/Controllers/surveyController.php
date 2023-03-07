<?php

namespace App\Http\Controllers;

use App\Models\answers;
use App\Models\questions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class surveyController extends Controller
{
    // return view of Survey
    public function displaySurvey(){
        $questions = questions::all();
        return view('survey.index')->with([
            'questions' => $questions,
        ]);
    }

    public function saveSurvey(Request $request)
    {
        $request->validate([
            'vraag1' => 'bail|required',
            'vraag2' => 'bail|required',
            'vraag3' => 'bail|required',
            'vraag4' => 'bail|required',
            'vraag5' => 'bail|required',
            'vraag6' => 'bail|required',
            'vraag7' => 'bail|required',
            'vraag8' => 'bail|required',
            'vraag9' => 'bail|required',
        ]);


        if(Auth::user()->employee){
            $oldanswer = answers::where('employeeId', Auth::user()->employee->id)->first();
            for($i = 1; $i < 10; $i++){
                if($oldanswer == null){
                    $answer = new answers();
                    $answer->questionId = $i;
                    $answer->employeeId = Auth::user()->employee->id;
                    $answer->score = (int)$request->input('vraag'.$i);
                    $answer->save(); 
                }else{
                    $answer = answers::where('questionId', $i)->where('employeeId',Auth::user()->employee->id)->first();
                    $answer->questionId = $i;
                    $answer->employeeId = Auth::user()->employee->id;
                    $answer->score = (int)$request->input('vraag'.$i);
                    $answer->save(); 
                }
               
            }
            return redirect('/dashboard/manageProfile');

        }
        // elseif(Auth::user()->employer){
        //     for($i < 10; $i++;){
        //         $answer = new answers();
    
                
        //         $answer->score = $request->input('vraag'.$i);
        //         $answer->save();
        //     }
        // }




    }

}
