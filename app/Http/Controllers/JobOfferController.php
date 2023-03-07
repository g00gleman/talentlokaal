<?php

namespace App\Http\Controllers;

use App\Models\jobCategory;
use App\Models\jobOffer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobOfferController extends Controller
{
    //
    public function create(){
        $jobCategories = jobCategory::all();
        return view('jobOffer.create',[
            'jobCategories' => $jobCategories
        ]);
    }
    public function store(Request $request){
        $this->validate(request(), [
            'function' => 'required|string|max:255',
            'jobCategoryId' => 'required|integer'
        ]);

        $newjobOffer = new jobOffer();
        $newjobOffer->function = $request->get('function');
        $newjobOffer->jobCategoryId = $request->get('jobCategoryId');
        $newjobOffer->employerId = Auth::user()->employer->id;
        $newjobOffer->save();

        return redirect(route('dashboard.manageProfile.index'));

    }
}
