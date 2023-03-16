<?php

use App\Http\Controllers\JobOfferController;
use App\Http\Controllers\MatchesController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\rolesController;
use App\Http\Controllers\surveyController;
use App\Http\Controllers\userFileController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

/*
|-------------------------------------
// these routes are used to define whic-------------------------------------
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

// route to decide which role the user is
Route::get('/roles', [rolesController::class, 'allRoles']);
Route::get('/role/{id}', [rolesController::class, 'getRole']);

// these routes are used to save data to the user table and to the specific role table
Route::post('registerEmployee', [rolesController::class, 'registerEmployee']);
Route::post('registerEmployer', [rolesController::class, 'registerEmployer']);

// in this middleware route are all routes define which you need to be logged in to access
Route::group(['prefix' => 'dashboard', 'middleware' => 'auth', 'as' => 'dashboard.'], function () {

    // loads the page after being logged in
    Route::get('/', [MatchesController::class, 'home']);
    Route::get('/support', function () {
        return view('support.index');
    });


    Route::get('/redirect', function () {
        return Redirect::to(url()->previous());
    });
    // get the route of the pitch
    Route::group(['prefix' => 'userFiles'], function () {
        Route::get('/pitch/{user}', [userFileController::class, 'getPitch'])->name('userPitch');
        //        Route::get('/cv/{user}', [userFileController::class, 'getCv']);
    });

    // update your profile with a description, files or cv
    Route::put('/description/{id}', [profileController::class, 'description']);

    Route::get('/introduction', [profileController::class, 'viewDescription']);

    // rousource routes
    // update profile info
    Route::resource('manageProfile', profileController::class);
    Route::get('manageProfile/{id}', [profileController::class, 'destroy']);
    Route::resource('jobOffer', JobOfferController::class);

    //click on survey button to see the survey
    Route::get('/survey', [surveyController::class, 'displaySurvey']);
    Route::post('/survey', [surveyController::class, 'saveSurvey']);
    Route::get('/logout', [profileController::class, 'logout']);
    Route::post('/destroy/{id}', [profileController::class, 'destroy']);


    Route::resource('matches', MatchesController::class);
    Route::get('/single/{id}', [MatchesController::class, 'single']);
    Route::get('/introduction', [profileController::class, 'viewDescription']);

    Route::get('/admin-portal/bedrijven', [EmployerController::class, 'companies'])->name('adminportal.pages.bedrijven.index');
    Route::get('/admin-portal/bedrijven', [EmployerController::class, 'companies'])->name('adminportal.pages.bedrijven.index');
    Route::get('/filter/{id}', [MatchesController::class, 'index']);
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'as' => 'dashboard.'], function () {
    Route::get('/dashboard', function () {
        return view('adminportal.index');
    });
    Route::get('/dashboard', [profileController::class, 'tenOfEach']);

    Route::get('/bedrijven', [EmployerController::class, 'companies'])->name('adminportal.pages.bedrijven.index');
    Route::get('/bedrijven/edit/{employers}', [EmployerController::class, 'getEdit'])->name('adminportal.pages.bedrijven.edit');
    Route::put('/bedrijven/edit/{employers}', [EmployerController::class, 'putEdit'])->name('adminportal.pages.bedrijven.edit.put');

    Route::get('/werkzoekende', [profileController::class, 'getAll'])->name('adminportal.pages.werkzoekende.index');

    Route::get('/matches', function () {
        return view('adminportal.pages.matches.index');
    });

    Route::get('/nieuws', [NewsController::class, 'getNews'])->name('adminportal.pages.nieuws.index');
    Route::resource('matches', MatchesController::class);

    Route::get('/nieuws', function () {
        return view('adminportal.pages.news.index');
    });
});
