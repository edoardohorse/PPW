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

Route::view('/','before_login/welcome');

//Route::view('/header','before_login/header_main');


Route::view('/boot','before_login/boot');

Route::view('/boot_socio','before_login/boot_socio');

Route::view('/boot_socio1','before_login/boot_socio1');

Route::view('/step0','forms/step0');
Route::view('/provastep','before_login/provastep');
Route::view('/provatesto','before_login/provatesto');