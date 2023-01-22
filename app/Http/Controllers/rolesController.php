<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rolesController extends Controller
{

    public function allRoles(){
        return view('roles.index');
    }

    public function getRole($id){
        return view('roles.single',compact($id));
    }

}
