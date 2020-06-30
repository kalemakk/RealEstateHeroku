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
    return view('home');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
})->middleware('auth');

Route::get('client', function () {
    return view('Layouts.client');
});
Route::get('aboutUs', function () {
    return view('aboutUs');
});



Route::get('contactUs', function () {
    return view('contactUs');
});

Route::get('mail','MailSend@mailsend');


Route::resource('property', 'PropertyController');
Route::resource('location', 'LocationController');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
