<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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


Route::middleware('auth')->namespace('Admin')-> group(function () {

    Route::resource('types', 'TypeController');

    Route::resource('newsletters', 'NewsletterController')->except('delete');

    Route::resource('mails', 'MailController');

    Route::resource('components' , 'ComponentController');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
