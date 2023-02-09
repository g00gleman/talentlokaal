<?php

use App\Http\Controllers\MatchesController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\rolesController;
use App\Http\Controllers\surveyController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// loads the first page of the application
Route::get('/', function () {
    return view('index');
});

// these routes are used to define which role the user is
Route::get('/roles', [rolesController::class, 'allRoles']);
Route::get('/role/{id}', [rolesController::class, 'getRole']);

// these routes are used to save data to the user table and to the specific role table
Route::post('registerEmployee', [rolesController::class, 'registerEmployee']);
Route::post('registerEmployer', [rolesController::class, 'registerEmployer']);

// in this middleware route are all routes define which you need to be logged in to access
Route::group(['prefix' => 'dashboard', 'middleware' => 'auth', 'as' => 'dashboard.'], function () {

    // loads the page after being logged in
    Route::get('/', function () {
        return view('homepage');
    });
    Route::get('/support', function () {
        return view('support.index');
    });

    Route::get('/redirect-back', function () {
        return Redirect::to(url()->previous());
    });

    // update your profile with a description, files or cv
    Route::put('/description/{id}', [profileController::class, 'description']);
    Route::put('/pitch/{id}', [profileController::class, 'pitch']);
    Route::put('/cv/{id}', [profileController::class, 'cv']);

    // update profile info
    Route::resource('manageProfile', profileController::class);

    //click on survey button to see the survey
    Route::get('/survey', [surveyController::class, 'displaySurvey']);
    Route::get('/logout', [profileController::class, 'logout']);


    Route::resource('matches', MatchesController::class);
});
