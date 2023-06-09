<?php

use App\Http\Controllers\JobOfferController;
use App\Http\Controllers\MatchesController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\rolesController;
use App\Http\Controllers\surveyController;
use App\Http\Controllers\userFileController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SupportController;
use App\Models\support;
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
    Route::get('/support', [SupportController::class, 'viewSupport']);


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
    Route::get('matchesEmployer', [MatchesController::class, 'employer']);
    Route::get('/single/{id}', [MatchesController::class, 'single']);
    Route::get('/introduction', [profileController::class, 'viewDescription']);

    Route::get('/admin-portal/bedrijven', [EmployerController::class, 'companies'])->name('adminportal.pages.bedrijven.index');
    Route::get('/admin-portal/bedrijven', [EmployerController::class, 'companies'])->name('adminportal.pages.bedrijven.index');
    Route::get('/{id}', [MatchesController::class, 'index']);
    Route::get('employee/{id}', [MatchesController::class, 'singeEmployer']);
});


Route::group(['prefix' => 'admin', 'middleware' => 'admin', 'as' => 'dashboard.'], function () {
    Route::get('/dashboard', function () {
        return view('adminportal.index');
    });
    Route::get('/dashboard', [profileController::class, 'tenOfEach']);

    Route::get('/bedrijven', [EmployerController::class, 'companies'])->name('adminportal.pages.bedrijven.index');
    Route::get('/bedrijven/edit/{employers}', [EmployerController::class, 'getEdit'])->name('adminportal.pages.bedrijven.edit');
    Route::put('/bedrijven/edit/{employers}', [EmployerController::class, 'putEdit'])->name('adminportal.pages.bedrijven.edit.put');
    Route::delete('/bedrijven/delete/{employers}', [EmployerController::class, 'delete'])->name('adminportal.pages.bedrijven.delete');

    Route::get('/werkzoekende', [EmployeeController::class, 'getAll'])->name('adminportal.pages.werkzoekende.index');
    Route::get('/werkzoekende/edit/{employee}', [EmployeeController::class, 'getEdit'])->name('adminportal.pages.werkzoekende.edit');
    Route::put('/werkzoekende/edit/{employee}', [EmployeeController::class, 'putEdit'])->name('adminportal.pages.werkzoekende.edit.put');
    Route::delete('/werkzoekende/delete/{employee}', [EmployeeController::class, 'delete'])->name('adminportal.pages.werkzoekende.delete');

    Route::get('/matches', [MatchesController::class, 'matchesAdmin']);

    Route::get('/nieuws', [NewsController::class, 'getNews']);

    Route::get('/nieuws/create', [NewsController::class, 'getCreate']);
    Route::post('/nieuws/create', [NewsController::class, 'postNews']);

    Route::get('/nieuws/edit/{id}', [NewsController::class, 'getEdit']);
    Route::put('/nieuws/edit/{id}', [NewsController::class, 'putEdit']);

    Route::delete('/nieuws/delete/{id}', [NewsController::class, 'delete']);


    Route::get('/support', [SupportController::class, 'getSupport']);

    Route::get('/support/create', [SupportController::class, 'getCreate']);
    Route::post('/support/create', [SupportController::class, 'postSupport']);

    Route::get('/support/edit/{id}', [SupportController::class, 'getEdit']);
    Route::put('/support/edit/{id}', [SupportController::class, 'putEdit']);

    Route::delete('/support/delete/{id}', [SupportController::class, 'delete']);

    Route::get('/support/create/media', [SupportController::class, 'getCreateMedia']);
    Route::post('/support/create/media', [SupportController::class, 'postSupportMedia']);

    Route::delete('/support/delete/media/{id}', [SupportController::class, 'deleteMedia']);
});
