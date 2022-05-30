<?php

use App\Http\Controllers\Backend\Attributes\AdvocateController;
use App\Http\Controllers\Backend\Attributes\CitationController;
use App\Http\Controllers\Backend\Attributes\CourtController;
use App\Http\Controllers\Backend\Attributes\DecisionController;
use App\Http\Controllers\Backend\Attributes\FirmController;
use App\Http\Controllers\Backend\Attributes\JudgeController;
use App\Http\Controllers\Backend\Attributes\MagistrateController;
use App\Http\Controllers\Backend\Attributes\OutcomeController;
use App\Http\Controllers\Backend\Attributes\PartyController;
use App\Http\Controllers\Backend\Attributes\SpecializationController;
use App\Http\Controllers\Backend\Attributes\SubjectController;
use App\Http\Controllers\Backend\CaselawController;
use App\Http\Controllers\Backend\Laws\Constitution\ArticleController;
use App\Http\Controllers\Backend\Laws\Constitution\ScheduleController;
use App\Http\Controllers\Backend\Locations\CountryController;
use App\Http\Controllers\Backend\Locations\CountyController;
use App\Http\Controllers\Backend\Locations\TownController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\Laws\Constitution\SubArticleController;
use App\Http\Controllers\Backend\Laws\Constitution\SubSubArticleController;
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
    Route::resource('/caselaws', CaselawController::class);
    Route::resource('/citations', CitationController::class);
    Route::resource('/articles', ArticleController::class);
    Route::resource('/sub_articles', SubArticleController::class);
    Route::resource('/sub_sub_articles', SubSubArticleController::class);
    Route::resource('/schedules', ScheduleController::class);
    Route::resource('/countries', CountryController::class);
    Route::resource('/counties', CountyController::class);
    Route::resource('/courts', CourtController::class);
    Route::resource('/decisions', DecisionController::class);
    Route::resource('/firms', FirmController::class);
    Route::resource('/judges', JudgeController::class);
    Route::resource('/magistrates', MagistrateController::class);
    Route::resource('/outcomes', OutcomeController::class);
    Route::resource('/parties', PartyController::class);
    Route::resource('/specializations', SpecializationController::class);
    Route::resource('/subjects', SubjectController::class);
    Route::resource('/towns', TownController::class);
    Route::resource('/users', UserController::class);
});
