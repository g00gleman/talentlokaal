<?php

namespace App\Http\Controllers;

use App\Models\employee;
use App\Models\Employer;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class rolesController extends Controller
{

    public function allRoles(): Factory|View|Application
    {
        return view('roles.index');
    }
    public function getRole($id): Factory|View|Application
    {
        return view('roles.single')->with('id', $id);
    }

    /**
     * @throws ValidationException
     */
    public function registerEmployee(Request $request): Redirector|Application|RedirectResponse
    {
        // call the registerUser method to register a user
        $newUser = $this->registerUser($request);

        // save data in employee table
        $newEmployee = new employee();
        $newEmployee->function = $request->get('function');
        $newEmployee->certificate = $request->get('certificate');
        $newEmployee->phoneNumber = $request->get('phoneNumber');
        $newEmployee->user_Id = $newUser->id;
        $newEmployee->save();

        // go to dashboard page
        return redirect('dashboard');
    }

    /**
     * @throws ValidationException
     */
    public function registerEmployer(Request $request): Redirector|Application|RedirectResponse
    {
        // call the registerUser method to register a user
        $newUser = $this->registerUser($request);

        // save data in employee table
        $newEmployer = new Employer();
        $newEmployer->companyName = $request->get('companyName');
        $newEmployer->websiteUrl = $request->get('websiteUrl');
        $newEmployer->user_Id = $newUser->id;
        $newEmployer->save();

        // go to dashboard page
        return redirect('dashboard');
    }

    /**
     * @param Request $request
     * @return User
     * @throws ValidationException
     */
    private function registerUser(Request $request): User
    {
        // validation errors for all form inputs
        $this->validate(request(), [
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|confirmed'
        ]);

        // save data in user table
        $newUser = new User();
        $newUser->firstName = $request->get('firstName');
        $newUser->lastName = $request->get('lastName');
        $newUser->email = $request->get('email');
        $newUser->password = bcrypt($request->get('password'));
        $newUser->save();

        // login the registered user
        Auth::login($newUser);
        return $newUser;
    }

}
