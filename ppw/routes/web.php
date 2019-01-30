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
    return view('welcome');
});


// A000
Route::get('/','MainController@index')->name('A000');

// A010
Route::get('/signInASD','MainController@firstSignInASD')->name('A010');

// B005
Route::get('/login','MainController@firstSignInASD')->name('A010');


// C000 - Chi siamo
Route::view('/our_team','our_team')->name('C000');

// C010 - Contatti
Route::view('/contacts','contacts')->name('C010');


