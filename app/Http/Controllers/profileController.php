<?php

namespace App\Http\Controllers;

use App\Models\employee;
use App\Models\Employer;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;

class profileController extends Controller
{
    // return the index view with specific userdata
    public function index()
    {
        $user = User::with('employee')->find(Auth::id());

        return view('profiles.index')->with('user', $user);

    }
    // save description
    public function description(Request $request, $id){
        $this->validate(request(), [
            'description' => 'required|string',
        ]);
        $user = User::find($id);
        $user->description = $request->get('description');
        $user->save();

        return redirect(route('dashboard.manageProfile.index'));
    }
    // save description
    public function pitch(Request $request, $id){
        $this->validate(request(), [
            'pitch' => 'required|file|mimetypes:video/mp4',
        ]);

        $user = User::find($id);
        // example
        // pitch = stevens pitch
        $pitch = $request->file('pitch');
        //  pitch = stevens_pitch
        $savePitch = time().'.'.$pitch->getClientOriginalExtension();
        // move stevens_pitch in the map called public/pitch
        $pitch->move(public_path('pitch'), $savePitch);
        // store stevens_pitch in user table database
            $user->pitch = $savePitch;
        $user->save();

        return redirect(route('dashboard.manageProfile.index'));
    }
    // return edit form page with all old userdata
    public function edit($id){
        $editUser = User::find($id);
        // dd($editUser);
        return view('profiles.edit')->with('user', $editUser);
    }

    // update specific user when click on update btn
    public function update($id, Request $request){
        $updateUser = User::find($id);
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

        $updateUser->name = $request->get('naam');
        $updateUser->email = $request->get('email');
        $updateUser->phoneNumber = $request->get('telefoonnummer');
        $updateUser->city = $request->get('plaats');
        $updateUser->street = $request->get('straat');
        $updateUser->houseNumber = $request->get('huisnummer');
        $updateUser->postalCode = $request->get('postcode');
        $updateUser->birthDate = $request->get('geboortedatum');
        $updateUser->password = bcrypt($request->get('wachtwoord'));
        // save all data
        $updateUser->save();

        // return to the profile page after updating
        return redirect(route('dashboard.manageProfile.index'));
    }


    public function editSmallInfo($id, Request $request){
        $updateUser = User::find($id);
        $updateEmployee = employee::find($id);
        // validation errors for all form inputs
        // $this->validate(request(), [
            // 'naam' => 'required|string|max:255',
            // 'email' => 'required|string|email|max:255|unique:users',
            // 'telefoonnummer' =>  'required|max:10|unique:App\Models\User,phoneNumber',
            // 'plaats' => 'required|string|max:255',
            // 'straat' => 'required|string|max:255',
            // 'huisnummer' => 'required|integer|digits_between:1,5',
            // 'postcode' => 'required|size:7|string',
            // 'geboortedatum' => 'required|before:today|Date',
        // ]);

        $updateUser->name = $request->get('name');
        // $updateUser->email = $request->get('email');
        // $updateUser->phoneNumber = $request->get('telefoonnummer');
        $updateUser->city = $request->get('city');
        $updateUser->street = $request->get('street');
        $updateUser->houseNumber = $request->get('houseNumber');
        $updateUser->postalCode = $request->get('postalCode');

        $updateEmployee->function = $request->get('employeeFunction');
        $updateEmployee->certificate = $request->get('employeeCertificate');

        // $updateUser->birthDate = $request->get('geboortedatum');

        // save all data
        $updateUser->save();
        $updateEmployee->save();

        // return to the profile page after updating
        return redirect(route('dashboard.manageProfile.index'));
    }

    // delete specific user when click on delete btn
    public function destroy($id){

        Auth::logout();
        Session()->flush();
        
        $user = User::find($id);
        $employee = employee::where('user_id', $id)->first();
        $employer = Employer::where('user_id', $id)->first();

        if(isset($employee)) {
            $user->destroy($id);
            $user->employee->delete();
        }
        elseif(isset($employer)){
            $user->destroy($id);
            $user->employer->delete();
        }
        return redirect('/');
    }
}
