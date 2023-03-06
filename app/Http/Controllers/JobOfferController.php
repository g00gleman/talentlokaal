<?php

namespace App\Http\Controllers;

use App\Models\jobOffer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobOfferController extends Controller
{
    //
    public function create(){
        return view('jobOffer.create');
    }
    public function store(Request $request){
        $this->validate(request(), [
            'function' => 'required|string|max:255',
        ]);

        $newjobOffer = new jobOffer();
        $newjobOffer->function = $request->get('function');
        $newjobOffer->employeeId = Auth::user()->employer->id;
        $newjobOffer->save();

        return redirect(route('dashboard.manageProfile.index'));

    }
}
