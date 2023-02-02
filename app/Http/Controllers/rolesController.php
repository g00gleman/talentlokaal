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

        // validation errors for employee form inputs
        $this->validate(request(), [
            'functie' => 'string|max:255',
            'diploma' => 'string|max:255',
            'description' => 'required',
        ]);

        // save data in employee table
        $newEmployee = new employee();
        $newEmployee->function = $request->get('functie');
        $newEmployee->certificate = $request->get('diploma');
        $newUser->description = $request->get('description');
        $newEmployee->user_Id = $newUser->id;
        $newEmployee->save();

        // go to homepage
        return redirect('dashboard');
    }

public function registerEmployer(Request $request)
    {
        // call the registerUser method to register a user
        $newUser = $this->registerUser($request);

        // validation errors for employer form inputs
        $this->validate(request(), [
            'bedrijfsnaam' => 'required|string|max:255',
            'websitelink' => 'string|active_url|max:255',
        ]);
        // save data in employee table
        $newEmployer = new Employer();
        $newEmployer->companyName = $request->get('bedrijfsnaam');
        $newEmployer->websiteUrl = $request->get('websitelink');
        $newEmployer->user_Id = $newUser->id;
        $newEmployer->save();

        // go to homepage
        return redirect('dashboard');
    }

private function registerUser(Request $request): User
    {
        // validation errors for all form inputs
        $this->validate(request(), [
            'naam' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'telefoonnummer' =>  'required|max:10|unique:App\Models\User,phoneNumber',
            'plaats' => 'required|string|max:255',
            'straat' => 'required|string|max:255',
            'huisnummer' => 'required|integer|digits_between:1,5',
            'postcode' => 'required|size:6|string',
            'geboortedatum' => 'required|before:today|Date',
            'wachtwoord' => 'required|min:8|max:20|confirmed'
        ]);

        // save data in user table
        $newUser = new User();
        $newUser->name = $request->get('naam');
        $newUser->email = $request->get('email');
        $newUser->phoneNumber = $request->get('telefoonnummer');
        $newUser->city = $request->get('plaats');
        $newUser->street = $request->get('straat');
        $newUser->houseNumber = $request->get('huisnummer');
        $newUser->postalCode = $request->get('postcode');
        $newUser->birthDate = $request->get('geboortedatum');
        $newUser->password = bcrypt($request->get('wachtwoord'));
        $newUser->save();

        // login the registered user
        Auth::login($newUser);
        return $newUser;
    }

}
