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

Route::view('/','boot/welcome');

Route::view('/boot','boot/boot');
Route::view('/boot_done','boot/boot_done');

Route::view('/boot_socio','boot/boot_socio');

Route::view('/boot_socio1','boot/boot_socio1');
Route::view('/boot_finished','boot/boot_finished');
Route::view('/login','boot/login');
Route::view('/login_done','boot/login_done');
Route::view('/login_failure','boot/login_failure');
Route::view('/main','boot/main_before');

Route::view('/box','test-box/page');


$n = ['name'=>'Christian', 'surname'=>'Meo'];

Route::view('/homepage','homepage',$n);
Route::view('/managment','managment',$n);
Route::view('/secretariat','secretariat',$n);
Route::view('/mng_activity','mng_activity',$n);
Route::view('/report_stats','report_stats',$n);