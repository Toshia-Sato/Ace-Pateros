<?php

use App\Models\Specialization;
use GuzzleHttp\Promise\Create;
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
    return view('welcome');
});
Route::get('/services/promo-packages', function () {
    return view('/services/promo-packages');
});
Route::get('/services/ancillary-services', function () {
    return view('/services/ancillary-services');
});
Route::get('/services/nursing-services', function () {
    return view('/services/nursing-services');
});


Route::get('physicians/dental', [App\Http\Controllers\PhysicianViewController::class, 'index']);
Route::get('physicians/ent', [App\Http\Controllers\PhysicianViewController::class, 'index']);
Route::get('physicians/internal-medicine', [App\Http\Controllers\PhysicianViewController::class, 'index']);
Route::get('physicians/ophthalmology', [App\Http\Controllers\PhysicianViewController::class, 'index']);
Route::get('physicians/pediatric', [App\Http\Controllers\PhysicianViewController::class, 'index']);
Route::get('physicians/surgery-doctors', [App\Http\Controllers\PhysicianViewController::class, 'index']);

Route::get('accredited-hmos', [App\Http\Controllers\HmoViewController::class, 'index']);

Route::get('floor-directory', function () {
    return view('floor-directory');
});
Route::get('careers', function () {
    return view('careers');
});
Route::get('about-us', function () {
    return view('about-us');
});
Route::get('contact-us', function () {
    return view('contact-us');
});
Route::get('faqs', function () {
    return view('faqs');
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('doctors', App\Http\Controllers\DoctorController::class);
Route::get('doctors/{doctors}/edit', [App\Http\Controllers\DoctorController::class, 'edit']);
Route::patch('doctors/{doctors}', [App\Http\Controllers\DoctorController::class, 'update']);
Route::get('/s', [App\Http\Controllers\SearchController::class, 'index']);
Route::get('/s/search', [App\Http\Controllers\SearchController::class, 'search']);

// SpecializationController
Route::resource('specializations', App\Http\Controllers\SpecializationController::class);
Route::get('specializations/{specializations}/edit', [App\Http\Controllers\SpecializationController::class, 'edit']);
Route::patch('specializatons/{specializatons}', [App\Http\Controllers\SpecializationController::class, 'update']);

// ServiceController
Route::resource('service', App\Http\Controllers\ServiceController::class);
Route::get('service/{service}/edit', [App\Http\Controllers\ServiceController::class, 'edit']);
Route::patch('service/{service}', [App\Http\Controllers\ServiceController::class, 'update']);

// ScheduleController
Route::resource('schedule', App\Http\Controllers\ScheduleController::class);
Route::get('schedule/{schedule}/edit', [App\Http\Controllers\ScheduleController::class, 'edit']);
Route::patch('schedule/{schedule}', [App\Http\Controllers\ScheduleController::class, 'update']);

// HMOController
Route::resource('hmo', App\Http\Controllers\hmoController::class);
Route::get('hmo/{hmo}/edit', [App\Http\Controllers\hmoController::class, 'edit']);
Route::patch('hmo/{hmo}', [App\Http\Controllers\hmoController::class, 'update']);

// HMOController
Route::resource('careers', App\Http\Controllers\DayController::class);
Route::get('careers/{careers}/edit', [App\Http\Controllers\DayController::class, 'edit']);
Route::patch('careers/{careers}', [App\Http\Controllers\DayController::class, 'update']);





Route::get('/search-box', function () {
    return view('searchbox');
});
