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
