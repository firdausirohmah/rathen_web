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

// home
Route::get('/', function () {
    return view('landing_page.home');
});

// landing page
Route::get('/page-costum', function () {
    return view('landing_page.page-costum');
});

// about
Route::get('/landing_page/about', function () {
    return view('landing_page.about');
});

// latest result
Route::get('/landing_page/result', function () {
    return view('landing_page.result');
});

// cara pemesanan
Route::get('/landing_page/pemesanan', function () {
    return view('landing_page.pemesanan');
});

// pricelist
Route::get('/landing_page/pricelist', function () {
    return view('landing_page.pricelist');
});

// location
Route::get('/location', function () {
    return view('landing_page.location');
});

// contact us
Route::get('/landing_page/contact', function () {
    return view('landing_page.contact');
});
