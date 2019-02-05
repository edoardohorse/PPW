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

Route::view('/boot','before_login/boot');
Route::view('/boot_done','before_login/boot_done');

Route::view('/boot_socio','before_login/boot_socio');

Route::view('/boot_socio1','before_login/boot_socio1');
Route::view('/boot_finished','before_login/boot_finished');
Route::view('/login','before_login/login');
Route::view('/login_done','before_login/login_done');
Route::view('/login_failure','before_login/login_failure');
Route::view('/main','before_login/main_before');

Route::view('/box','test-box/page');


$n = ['name'=>'Christian', 'surname'=>'Meo'];

Route::view('/homepage','homepage',$n);
Route::view('/managment','managment',$n);
Route::view('/secretariat','secretariat',$n);
Route::view('/mng_activity','mng_activity',$n);
Route::view('/report_stats','report_stats',$n);