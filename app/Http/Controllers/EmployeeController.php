<?php

namespace App\Http\Controllers;

use App\Models\employee;
use App\Models\User;
use App\Models\jobCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function getEdit(Employee $employee)
    {
        $jobCategory = jobCategory::all();
        return view('adminportal.pages.werkzoekende.edit', [
            'employee' => $employee,
            'jobCategory' => $jobCategory,

        ]);
    }
    public function putEdit($id, Request $request){
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
        $updateEmployee = employee::find($id);
        $updateUser = User::find($updateEmployee->user->id);
    
       
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
            'jobCategory' => 'integer',
            'diploma' => 'string|max:255',
            'geboortedatum' => 'required|before:today|Date',
        ]);

        $updateEmployee->jobCategory = $request->get('jobCategory');
        $updateEmployee->certificate = $request->get('diploma');
        $updateEmployee->birthDate = $request->get('geboortedatum');
        $updateEmployee->save();
        return redirect('/admin/werkzoekende');
    }

    public function delete($id)
    {

      

        $user = User::find($id);

            $user->destroy($id);
            $user->employee->delete();
        return redirect('/admin/werkzoekende');
    }
}
