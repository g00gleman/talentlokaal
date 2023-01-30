<?php

namespace App\Http\Controllers;

use App\Models\employee;
use App\Models\Employer;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class rolesController extends Controller
{

    public function allRoles()
    {
        return view('roles.index');
    }
    public function getRole($id)
    {
        return view('roles.single')->with('id', $id);
    }

    public function registerEmployee(Request $request)
    {
        // call the registerUser method to register a user
        $newUser = $this->registerUser($request);

        // save data in employee table
        $newEmployee = new employee();
        $newEmployee->function = $request->get('function');
        $newEmployee->certificate = $request->get('certificate');
        $newEmployee->user_Id = $newUser->id;
        $newEmployee->save();

        // go to homepage
        return redirect('dashboard');
    }

    public function registerEmployer(Request $request)
    {
        // call the registerUser method to register a user
        $newUser = $this->registerUser($request);

        // save data in employee table
        $newEmployer = new Employer();
        $newEmployer->companyName = $request->get('companyName');
        $newEmployer->websiteUrl = $request->get('websiteUrl');
        $newEmployer->user_Id = $newUser->id;
        $newEmployer->save();

        // go to homepage
        return redirect('dashboard');
    }

    private function registerUser(Request $request): User
    {
        // validation errors for all form inputs
        $this->validate(request(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phoneNumber' =>  'required|max:10||unique:users',
            'city' => 'required|string|max:255',
            'street' => 'required|string|max:255',
            'houseNumber' => 'required|integer|digits_between:1,5',
            'postalCode' => 'required|size:6|string',
            'birthDate' => 'required|before:today|Date',
            'password' => 'required|min:8|max:20|confirmed'
        ]);

        Carbon::parse($request->get('birthDate'))->format('d/m/Y');
        // save data in user table
        $newUser = new User();
        $newUser->firstName = $request->get('firstName');
        $newUser->lastName = $request->get('lastName');
        $newUser->email = $request->get('email');
        $newUser->phoneNumber = $request->get('phoneNumber');
        $newUser->city = $request->get('city');
        $newUser->street = $request->get('street');
        $newUser->houseNumber = $request->get('houseNumber');
        $newUser->postalCode = $request->get('postalCode');
        $newUser->birthDate = $request->get('birthDate');
        $newUser->password = bcrypt($request->get('password'));
        $newUser->save();

        // login the registered user
        Auth::login($newUser);
        return $newUser;
    }

}
