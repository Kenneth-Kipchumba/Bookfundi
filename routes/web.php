<?php

use App\Http\Controllers\Backend\AdvocateController;
use App\Http\Controllers\Backend\CitationController;
use App\Http\Controllers\Backend\CountryController;
use App\Http\Controllers\Backend\CountyController;
use App\Http\Controllers\Backend\CourtController;
use App\Http\Controllers\Backend\FirmController;
use App\Http\Controllers\Backend\JudgeController;
use App\Http\Controllers\Backend\MagistrateController;
use App\Http\Controllers\Backend\PartyController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\SpecializationController;
use App\Http\Controllers\Backend\SubjectController;
use App\Http\Controllers\Backend\TownController;
use App\Http\Controllers\Backend\UserController;
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

Route::get('/', function () {
    return view('frontend.pages.home');
});

Route::get('home', function () {
    return view('frontend.pages.home');
});

Route::get('search_result', function () {
    return view('frontend.pages.search_results');
});

Route::get('pricing', function () {
    return view('frontend.pages.pricing');
});

//Backend Routes
Route::prefix('backend')->name('backend.')->group(function ()
{
    Route::resource('/advocates', AdvocateController::class);
    Route::resource('/citations', CitationController::class);
    Route::resource('/countries', CountryController::class);
    Route::resource('/counties', CountyController::class);
    Route::resource('/courts', CourtController::class);
    Route::resource('/firms', FirmController::class);
    Route::resource('/judges', JudgeController::class);
    Route::resource('/magistrates', MagistrateController::class);
    Route::resource('/parties', PartyController::class);
    Route::resource('/specializations', SpecializationController::class);
    Route::resource('/subjects', SubjectController::class);
    Route::resource('/towns', TownController::class);
    Route::resource('/users', UserController::class);
});
