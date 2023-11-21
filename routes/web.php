<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use Illuminate\Http\Request;
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

// home
Route::get('/', function () {
    return view('landing_page.home');
});

// landing page
Route::get('/page-costum', function () {
    return view('landing_page.page-costum');
});
Route::get('/price-list', function () {
    return view('landing_page.price-list');
});

// about
Route::get('/about', function () {
    return view('landing_page.about');
});

// latest result
Route::get('/result', function () {
    return view('landing_page.result');
});

// cara pemesanan
Route::get('/pemesanan', function () {
    return view('landing_page.pemesanan');
});

// pricelist
Route::get('/pricelist', function () {
    return view('landing_page.pricelist');
});
Route::post('/pricelist', function (Request $request) {
    $list = $request->lang;
    dd($list);
    return view('landing_page.pricelist');
});

// location
Route::get('/location', function () {
    return view('landing_page.location');
});

// contact us
Route::get('/contact', function () {
    return view('landing_page.contact');
});

Route::controller(loginController::class)->group(function(){
    Route::get('/login','login')->name('login');
    Route::post('/login/actionlogin','actionlogin')->name('actionlogin');
    Route::get('actionlogout','actionlogout')->name('actionlogout');
});
Route::controller(registerController::class)->group(function(){
    Route::get('/daftar','daftar')->name('daftar');
    Route::post('/daftar/actiondaftar','actionregister')->name('actionregister');
});

Route::controller(adminController::class)->group(function(){
    Route::get('/dashboard','dashboard')->name('dashboard');
    Route::get('/view-order','vieworder')->name('vieworder');
    Route::get('/finance','finance')->name('finance');
});
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
