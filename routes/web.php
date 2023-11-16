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

// about us
Route::get('/landingpage', function () {
    return view('about');
});

// latest result
Route::get('/landingpage', function () {
    return view('result');
});


// admin


// controler
