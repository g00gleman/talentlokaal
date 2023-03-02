<?php

namespace App\Http\Controllers;

use App\Models\employee;
use App\Models\Employer;
use App\Models\jobCategory;
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
        $jobCategories = jobCategory::all();
        return view('roles.single',[
            'id' => $id,
            'jobCategories' => $jobCategories,
        ]);
    }

    public function registerEmployee(Request $request)
    {
        // call the registerUser method to register a user
        $newUser = $this->registerUser($request);

        // validation errors for employee form inputs
        $this->validate(request(), [
            'jobCategory' => 'integer',
            'diploma' => 'string|max:255',
        ]);

        // save data in employee table
        $newEmployee = new employee();
        $newEmployee->jobCategory = $request->get('jobCategory');
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
        $this->validate(request(), [
            'naam' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'telefoonnummer' =>  'required|max:255|unique:App\Models\User,phoneNumber',
            'adres' => 'required|string|max:255',
            'geboortedatum' => 'required|before:today|Date',
            'profielfoto' => 'mimes:jpg,jpeg,png', 'max:1024',
            'wachtwoord' => 'required|min:8|max:20|confirmed'
        ]);


        // save data in user table
        $newUser = new User();
        $newUser->name = $request->get('naam');
        $newUser->email = $request->get('email');
        $newUser->phoneNumber = $request->get('telefoonnummer');
        $newUser->adress = $request->get('adres');
        $newUser->birthDate = $request->get('geboortedatum');
        // get the image out of form
        $image = $request->file('profielfoto');
        if (isset($image)){
            // new file name for image
            $imageNewFileName = time(). "." . $image->extension();

            // replace old filename with the new one and save it into storage/public
            Storage::disk('local')->put($imageNewFileName,  $image->get());
            $newUser->profile_photo_path = $imageNewFileName;
        }
        $newUser->password = bcrypt($request->get('wachtwoord'));
        $newUser->save();

        // login the registered user
        Auth::login($newUser);
        return $newUser;
    }

}
