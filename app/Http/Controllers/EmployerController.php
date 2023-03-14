<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\jobCategory;
use Database\Seeders\employer as SeedersEmployer;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function companies(jobCategory $jobCategory ){
        $employers = Employer::all();
        return view('adminportal.pages.bedrijven.index',[
            'employers' =>$employers,
            'jobcategory' => $jobCategory,
    ]);
}
    public function getEdit(Employer $employers){
        
        return view('adminportal.pages.bedrijven.edit',[
        'employer' => $employers,

    ]);
}
}



