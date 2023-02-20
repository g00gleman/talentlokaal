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

    public function logout(){
        Auth::logout();
        Session()->flush();
        return redirect('/');
    }
//    public function cv(Request $request, $id){
//        $this->validate(request(), [
//            'cv' => 'file|mimes:doc,docx,pdf,png,jpg,jpeg',
//        ]);
//
//        $user = User::with('employee')->find($id);
//        // example
//        // files = stevens files
//        $cv = $request->get('cv');
//        //  files = stevens_pitch
//        $saveCv = time().'.'.$cv->getClientOriginalExtension();
//        // move stevens_pitch in the map called public/files
//        $cv->move(public_path('files'), $saveCv);
//        // store stevens_pitch in user table database
//
//        $user->employee->cv = $saveCv;
//        $user->employee->save();
//
//        return redirect(route('dashboard.manageProfile.index'));
//    }

    // return edit form page with all old userdata
    public function edit($id){
        $editUser = User::find($id);
        // dd($editUser);
        return view('profiles.edit')->with('user', $editUser);
    }

    // update specific user profile when click on update btn
    public function update($id, Request $request){
        // validation errors for all form inputs
        $this->validate(request(), [
            'naam' => 'required|string|max:255',
            'adres' => 'required|string|max:255',
            // 'profielfoto' => 'image',
            'pitch' => 'file|mimetypes:video/mp4',
            'beschrijving' => 'string',
        ]);

        // update user table
        $updateUser = User::find($id);

        $pitch = $request->file('pitch');
        if (isset($pitch)){
            // if they oploaded a pitch
            // new file name for pitch
            $newVideoFileName = time(). "." . $pitch->getExtension();
            // replace old filename with the new one and save it into storage/public
            Storage::disk('local')->put($newVideoFileName,  $pitch->get());
            $updateUser->pitch = $newVideoFileName;
        }
        $updateUser->name = $request->get('naam');
        $updateUser->description = $request->get('beschrijving');
        $updateUser->adress = $request->get('adres');
        $updateUser->save();

        if (isset($updateUser->employee)){
            $this->validate(request(), [
                'functie' => 'string|max:255',
                'diploma' => 'string|max:255',
            ]);
            // update employee table
            $updateEmployee = employee::find($updateUser->employee->id);
            $updateEmployee->function = $request->get('functie');
            $updateEmployee->certificate = $request->get('diploma');
            $updateEmployee->save();
        }elseif (isset($updateUser->employer)){
            $this->validate(request(), [
                'bedrijfsnaam' => 'required|string|max:255',
                'websitelink' => 'string|active_url|max:255',
            ]);
            // update employer table
            $updateEmployee = Employer::find($updateUser->employer->id);
            $updateEmployee->companyName = $request->get('bedrijfsnaam');
            $updateEmployee->websiteUrl = $request->get('websitelink');
            $updateEmployee->save();
        }else{

        }

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
