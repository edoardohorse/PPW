<?php
/*
 * BOOT
 * */


Route::get('/',                'MainController@firstSignInASD');

Route::view('/boot',            'boot/boot');
Route::view('/boot-asd-done',   'boot/boot-asd-done');
Route::view('/boot-socio',      'boot/boot-socio');
Route::view('/boot-finished',   'boot/boot-finished');



/*
 * LOGIN
 * */
Route::view('/login',           'login/login');
Route::view('/login-done',      'login/login-done');
Route::view('/login-failure',   'login/login-failure');





/*
 * Test-box
 *
 * */

Route::view('/box','test-box/page');


/*
 * HOME
 *
 * */

$n = ['name'=>'Christian', 'surname'=>'Meo'];
Route::view('/homepage','homepage',$n);
Route::view('/managment','managment',$n);
Route::view('/secretariat','secretariat',$n);
Route::view('/mng-activity','mng-activity',$n);
Route::view('/report-stats','report-stats',$n);


