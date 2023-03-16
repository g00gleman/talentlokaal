<?php

namespace App\Http\Controllers;

use App\Models\employee;
use App\Models\Employer;
use App\Models\jobCategory;
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
        $user = Auth::user();
        if (isset($user->employee)) {
            $categoryName = jobCategory::where('id', $user->employee->jobCategory)->first();
            return view('profiles.index', [
                'user' => $user,
                'categoryName' => $categoryName,
            ]);
        } elseif ($user->employer) {
            $categoryName = jobCategory::where('id', $user->employer->jobCategory)->first();
            return view('profiles.index', [
                'categoryName' => $categoryName,
                'user' => $user,
            ]);
        }
    }

    public function getAll(jobCategory $jobCategory)
    {
        $employees = employee::all();
        return view('adminportal.pages.werkzoekende.index', [
            'employees' => $employees,
            'jobcategory' => $jobCategory,
        ]);
    }

    public function tenOfEach(jobCategory $jobCategory)
    {
        $employees = employee::all()->take(10);
        $employers = Employer::all()->take(10);

        return view('adminportal.index', [
            'employees' => $employees,
            'employers' => $employers,
            'jobcategory' => $jobCategory,
        ]);
    }

    // load the view RegisterIntro to add description
    public function viewDescription()
    {
        return view('RegisterIntro.index');
    }
    // save description
    public function description(Request $request, $id)
    {
        $user = User::find($id);
        $user->description = $request->get('description');
        $user->save();

        return redirect('/dashboard');
    }

    public function logout()
    {
        Auth::logout();
        Session()->flush();
        return redirect('/');
    }

    // return edit form page with all old userdata
    public function edit($id)
    {
        $editUser = User::find($id);

        $jobCategories = jobCategory::all();

        // dd($editUser);
        return view('profiles.edit', [
            'user' => $editUser,
            'jobCategories' => $jobCategories,
        ]);
    }

    // update specific user profile when click on update btn
    public function update($id, Request $request)
    {
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

        $image = $request->file('profielfoto');
        if (isset($image)) {
            // new file name for image
            $imageNewFileName = time() . "." . $image->extension();

            // replace old filename with the new one and save it into storage/public
            Storage::disk('local')->put($imageNewFileName,  $image->get());
            $updateUser->profile_photo_path = $imageNewFileName;
        }

        $pitch = $request->file('pitch');
        if (isset($pitch)) {
            // if they oploaded a pitch
            // new file name for pitch
            $newVideoFileName = time() . "." . $pitch->extension();
            // replace old filename with the new one and save it into storage/public
            Storage::disk('local')->put($newVideoFileName,  $pitch->get());
            $updateUser->pitch = $newVideoFileName;
        }
        $updateUser->name = $request->get('naam');
        $updateUser->description = $request->get('beschrijving');
        $updateUser->adress = $request->get('adres');
        $updateUser->save();

        if (isset($updateUser->employee)) {
            $this->validate(request(), [
                'jobCategory' => 'integer',
                'diploma' => 'string|max:255',
            ]);
            // update employee table
            $updateEmployee = employee::find($updateUser->employee->id);
            $updateEmployee->jobCategory = $request->get('jobCategory');
            $updateEmployee->certificate = $request->get('diploma');
            $updateEmployee->save();
        } elseif (isset($updateUser->employer)) {
            $this->validate(request(), [
                'bedrijfsnaam' => 'required|string|max:255',
                'websitelink' => 'string|active_url|max:255',
            ]);
            // update employer table
            $updateEmployee = Employer::find($updateUser->employer->id);
            $updateEmployee->companyName = $request->get('bedrijfsnaam');
            $updateEmployee->websiteUrl = $request->get('websitelink');
            $updateEmployee->save();
        } else {
        }

        // return to the profile page after updating
        return redirect(route('dashboard.manageProfile.index'));
    }

    // delete specific user when click on delete btn
    public function destroy($id)
    {

        Auth::logout();
        Session()->flush();

        $user = User::find($id);
        $employee = employee::where('user_id', $id)->first();
        $employer = Employer::where('user_id', $id)->first();

        if (isset($employee)) {
            $user->destroy($id);
            $user->employee->delete();
        } elseif (isset($employer)) {
            $user->destroy($id);
            $user->employer->delete();
        }
        return redirect('/');
    }
}
