<?php

use App\Http\Controllers\profileController;
use App\Http\Controllers\rolesController;
use Illuminate\Support\Facades\Route;

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
Route::group(['prefix' => 'dashboard' , 'middleware' => 'auth', 'as' => 'dashboard.'], function() {

    // loads the page after being logged in
    Route::get('/', function () {
        return view('homepage');
    });

    // view profile page
    Route::get('/profile', [profileController::class, 'viewProfile']);

});
