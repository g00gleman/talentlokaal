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
        $user = User::with('employee','employer')->find(Auth::id())->first();

        return view('profiles.index')->with('user', $user);

    }
}
