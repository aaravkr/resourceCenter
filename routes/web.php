<?php

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
    return view('pages.index');
});

Route::get('/download', function () {
    return view('pages.download');
});

Route::get('/walkthrough', function () {
    return view('pages.WalkThrough');
});

Route::get('/faq', function () {
    return view('pages.faq');
});