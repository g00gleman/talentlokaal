<?php

namespace App\Http\Controllers;

use App\Models\employee;
use App\Models\Employer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class profileController extends Controller
{
    // return the index view with specific userdata
    public function viewProfile()
    {
        $user = User::with('employee')->find(Auth::id());

        return view('profiles.index')->with('user', $user);

    }

    // return edit form page with all old userdata
    public function edit($id){
        $editUser = User::find($id);
        return view('profiles.edit')->with('editUser', $editUser);
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
        return redirect('/profile');
    }

    // delete specific user when click on delete btn
    public function destroy($id){
        User::destroy($id);
    }
}
