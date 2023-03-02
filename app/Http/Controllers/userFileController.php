<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class userFileController extends Controller
{
    // get the pitch file
    public function getPitch(User $user){
        $pitch = Storage::disk('local')->path($user->pitch);
        return response()->download($pitch);
    }
    // get the cv file and return pdf
    public function getCv(User $user){
        $cv = Storage::disk('local')->path($user->cv);
    }

}
