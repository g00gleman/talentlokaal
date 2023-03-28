<?php

namespace App\Http\Controllers;

use App\Models\answers;
use App\Models\Employer;
use App\Models\jobCategory;
use App\Models\jobOffer;
use App\Models\questions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobOfferController extends Controller
{
    //
    public function index(){
        return view('jobOffer/index',[
            'employer' => Employer::with('jobOffers')->find(Auth::user()->employer)->first(),
        ]);
    }
    public function create(){
        // $questions = questions::all();
        $questions = questions::where('id', '>=', 10)->limit(9)->get();
        dd($questions);
        $jobCategories = jobCategory::all();
        return view('jobOffer.create',[
            'jobCategories' => $jobCategories,
            'questions' => $questions,

        ]);
    }
    public function store(Request $request){
        $this->validate(request(), [
            'description' => 'required|max:255',
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
        $newjobOffer->description = $request->get('description');
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

        return redirect(route('dashboard.jobOffer.index'));

    }
    public function edit($id){
        return view('jobOffer/edit',[
            'jobCategories' => jobCategory::all(),
            'jobOffer' => jobOffer::with('jobCategorie')->find($id),
        ]);
    }
    public function update($id, Request $request){
        $this->validate(request(), [
            'description' => 'required|max:255',
            'function' => 'required|string|max:255',
            'jobCategoryId' => 'required|integer',
        ]);

        $updateJobOffer = jobOffer::find($id);
        $updateJobOffer->function = $request->get('function');
        $updateJobOffer->jobCategoryId = $request->get('jobCategoryId');
        $updateJobOffer->description = $request->get('description');
        $updateJobOffer->employerId = Auth::user()->employer->id;
        $updateJobOffer->save();

        return redirect(route('dashboard.jobOffer.index'));
    }
    public function destroy($id){
        jobOffer::destroy($id);
        return redirect()->back();
    }
}
