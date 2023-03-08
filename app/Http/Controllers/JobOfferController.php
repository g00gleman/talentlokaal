<?php

namespace App\Http\Controllers;

use App\Models\answers;
use App\Models\jobCategory;
use App\Models\jobOffer;
use App\Models\questions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobOfferController extends Controller
{
    //
    public function create(){
        $questions = questions::all();
        $jobCategories = jobCategory::all();
        return view('jobOffer.create',[
            'jobCategories' => $jobCategories,
            'questions' => $questions,

        ]);
    }
    public function store(Request $request){
        $this->validate(request(), [
            'function' => 'required|string|max:255',
            'jobCategoryId' => 'required|integer',
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

        $newjobOffer = new jobOffer();
        $newjobOffer->function = $request->get('function');
        $newjobOffer->jobCategoryId = $request->get('jobCategoryId');
        $newjobOffer->employerId = Auth::user()->employer->id;
        $newjobOffer->save();

        $oldanswer = answers::where('jobOfferId', $newjobOffer->id)->first();
        for($i = 1; $i < 10; $i++){
            if($oldanswer == null){
                $answer = new answers();
                $answer->questionId = $i;
                $answer->jobOfferId = $newjobOffer->id;
                $answer->score = (int)$request->input('vraag'.$i);
                $answer->save(); 
            }else{
                $answer = answers::where('questionId', $i)->where('employeeId',Auth::user()->employee->id)->first();
                $answer->questionId = $i;
                $answer->jobOfferId = $newjobOffer->id;
                $answer->score = (int)$request->input('vraag'.$i);
                $answer->save(); 
            }
        }

        return redirect(route('dashboard.manageProfile.index'));

    }
}
