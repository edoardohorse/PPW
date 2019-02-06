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
use App\User;
use App\Member;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/prv', function(){
    $user = Member::with('user')->where('id','=','1')->get();
    var_dump($user);
})
    ->name('prv')
    ->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');
