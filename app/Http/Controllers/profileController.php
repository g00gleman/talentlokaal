<?php

namespace App\Http\Controllers;

use App\Models\employee;
use App\Models\Employer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class profileController extends Controller
{
    //
    public function viewProfile()
    {
//        $user = User::with('employee','employer')->where('id', Auth::id())->get();
        $employee = employee::with('user')->where('user_id', Auth::id())->get();
        $employer = Employer::with('user')->where('user_id', Auth::id())->get();
        return view('profiles.index')->with([
            'employee' => $employee,
            'employer' => $employer
        ]);
    }
}
