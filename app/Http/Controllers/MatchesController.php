<?php

namespace App\Http\Controllers;

use App\Models\answers;
use Illuminate\Http\Request;

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
}
