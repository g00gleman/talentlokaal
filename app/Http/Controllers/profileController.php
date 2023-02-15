<?php

namespace App\Http\Controllers;

use App\Models\employee;
use App\Models\Employer;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;

class profileController extends Controller
{
    // return the index view with specific userdata
    public function index()
    {
        $user = User::with('employee')->find(Auth::id());

        return view('profiles.index')->with('user', $user);

    }
    // load the view RegisterIntro to add description
    public function viewDescription(){
        return view('RegisterIntro.index');
    }
    // save description
    public function description(Request $request, $id){
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
        // get the video out of form
        $video = $request->file('pitch');
        // new file name for image
        $newVideoFileName = time(). "." . $video->getExtension();
        // replace old filename with the new one and save it into storage/public
        Storage::disk('local')->put($newVideoFileName,  $video->get());

        $user = User::find($id);
        $user->pitch = $newVideoFileName;
        $user->save();

        return redirect(route('dashboard.manageProfile.index'));
    }
    public function logout(){
        Auth::logout();
        Session()->flush();
        return redirect('/');
    }
    public function cv(Request $request, $id){
        $this->validate(request(), [
            'cv' => 'file|mimes:doc,docx,pdf,png,jpg,jpeg',
        ]);

        $user = User::with('employee')->find($id);
        // example
        // files = stevens files
        $cv = $request->get('cv');
        //  files = stevens_pitch
        $saveCv = time().'.'.$cv->getClientOriginalExtension();
        // move stevens_pitch in the map called public/files
        $cv->move(public_path('files'), $saveCv);
        // store stevens_pitch in user table database

        $user->employee->cv = $saveCv;
        $user->employee->save();

        return redirect(route('dashboard.manageProfile.index'));
    }

    // return edit form page with all old userdata
    public function edit($id){
        $editUser = User::find($id);
        // dd($editUser);
        return view('profiles.edit')->with('user', $editUser);
    }

    // update specific user profile when click on update btn
    public function update($id, Request $request){
        $updateUser = User::find($id);
        $updateEmployee = employee::find($id);
        // validation errors for all form inputs
        $this->validate(request(), [
            'naam' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'telefoonnummer' =>  'required|max:255|unique:App\Models\User,phoneNumber',
            'adres' => 'required|string|max:255',
            'geboortedatum' => 'required|before:today|Date',
            'profielfoto' => 'image',
        ]);

        $updateUser->name = $request->get('name');
        // $updateUser->email = $request->get('email');
        // $updateUser->phoneNumber = $request->get('telefoonnummer');
        $updateUser->adress = $request->get('adress');
//            dd( $request->get('employeeFunction'));
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

    public function profileFoto( Request $request,$id){

        $data = $this->validate(request(), [
            'profielfoto' => 'image',
        ]);
        // get the image out of form
        $image = $request->file('profielfoto');
        // new file name for image
        $imageNewFileName = time(). "." . $image->getExtension();
        // replace old filename with the new one and save it into storage/public
        Storage::disk('local')->put($imageNewFileName,  $image->get());

        // save data in user table
        $newUser = User::find($id);
        $newUser->profile_photo_path = $imageNewFileName;
        $newUser->save();

        return redirect(route('dashboard.manageProfile.index'));
    }
}
