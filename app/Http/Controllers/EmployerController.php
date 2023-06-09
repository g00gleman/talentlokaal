<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\jobCategory;
use App\Models\User;
use Database\Seeders\employer as SeedersEmployer;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;

class EmployerController extends Controller
{
    public function companies()
    {
        $employers = Employer::all();
        return view('adminportal.pages.bedrijven.index', [
            'employers' => $employers,
        ]);
    }

    public function getEdit(Employer $employers)
    {
        $jobCategory = jobCategory::all();
        return view('adminportal.pages.bedrijven.edit', [
            'employer' => $employers,
            'jobcategorys' => $jobCategory,

        ]);
    }
    public function putEdit($id, Request $request)
    {

       // validation errors for all form inputs
       $this->validate(request(), [
        'naam' => 'required|string|max:255',
        'adres' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'telefoonnummer' => 'required|string|max:255',
        // 'profielfoto' => 'image',
        'pitch' => 'file|mimetypes:video/mp4',
        'beschrijving' => 'string',
    ]);
    
    // update user table
    $updateEmployer = Employer::find($id);
    $updateUser = User::find($updateEmployer->user->id);

    $image = $request->file('profielfoto');
    if (isset($image)) {
        // new file name for image
        $imageNewFileName = time() . "." . $image->extension();

        // replace old filename with the new one and save it into storage/public
        Storage::disk('local')->put($imageNewFileName,  $image->get());
        $updateUser->profile_photo_path = $imageNewFileName;
    }

    $updateUser->name = $request->get('naam');
    $updateUser->description = $request->get('beschrijving');
    $updateUser->email = $request->get('email');
    $updateUser->phoneNumber = $request->get('telefoonnummer');
    $updateUser->adress = $request->get('adres');
    $updateUser->save();

    $this->validate(request(), [
        'bedrijfsnaam' => 'required|string|max:255',
        'websitelink' => 'string|active_url|max:255',
    ]);
    // update employer table
    $updateEmployer->companyName = $request->get('bedrijfsnaam');
    $updateEmployer->websiteUrl = $request->get('websitelink');
    $updateEmployer->save();


    return redirect('/admin/bedrijven');
    }
    

    public function delete($id)
    {

       ;

        $user = User::find($id);

            $user->destroy($id);
            $user->employer->delete();
        return redirect('/admin/bedrijven');
    }
}
