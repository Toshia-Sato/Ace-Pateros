<?php

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
Route::get('physicians/dental', function () {
    return view('physicians/dental');
});
Route::get('physicians/ent', function () {
    return view('physicians/ent');
});
Route::get('physicians/internal-medicine', function () {
    return view('physicians/internal-medicine');
});
Route::get('physicians/ophthalmology', function () {
    return view('physicians/ophthalmology');
});
Route::get('physicians/pediatric', function () {
    return view('physicians/pediatric');
});
Route::get('physicians/surgery-doctors', function () {
    return view('physicians/surgery-doctors');
});
Route::get('accredited-hmos', function () {
    return view('accredited-hmos');
});
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
