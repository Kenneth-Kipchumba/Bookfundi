<?php

use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\CourtController;
use App\Http\Controllers\Backend\CountryController;
use App\Http\Controllers\Backend\CountyController;
use App\Http\Controllers\Backend\TownController;
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
    Route::resource('/users', UserController::class);
    Route::resource('/courts', CourtController::class);
    Route::resource('/countries', CountryController::class);
    Route::resource('/counties', CountyController::class);
    Route::resource('/towns', TownController::class);
});
