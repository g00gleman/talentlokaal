<?php

namespace App\Http\Controllers;

use App\Models\employee;
use App\Models\Employer;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use SplFileInfo;

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
        ]);

        // save data in employee table
        $newEmployee = new employee();
        $newEmployee->function = $request->get('functie');
        $newEmployee->certificate = $request->get('diploma');
        $newUser->description = $request->get('description');
        $newEmployee->user_Id = $newUser->id;
        $newEmployee->save();

        // go to homepage
        return redirect('/dashboard/introduction');
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
        return redirect('/dashboard/introduction');
    }

private function registerUser(Request $request): User
    {
        // validation errors for all form inputs
        $data = $this->validate(request(), [
            'naam' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'telefoonnummer' =>  'required|unique:App\Models\User,phoneNumber',
            'adres' => 'required|string|max:255',
            'geboortedatum' => 'required|before:today|Date',
            'profielfoto' => 'image',
            'wachtwoord' => 'required|min:8|max:20|confirmed'
        ]);
        // get the image out of form
        $image = $request->file('profielfoto');
        // new file name for image
        $imageNewFileName = time(). "." . $image->getExtension();
        // replace old filename with the new one and save it into storage/public
        Storage::disk('local')->put($imageNewFileName,  $image->get());

        // save data in user table
        $newUser = new User();
        $newUser->name = $request->get('naam');
        $newUser->email = $request->get('email');
        $newUser->phoneNumber = $request->get('telefoonnummer');
        $newUser->adress = $request->get('adres');
        $newUser->birthDate = $request->get('geboortedatum');
        $newUser->profile_photo_path = $imageNewFileName;
        $newUser->password = bcrypt($request->get('wachtwoord'));
        $newUser->save();

        // login the registered user
        Auth::login($newUser);
        return $newUser;
    }

}
