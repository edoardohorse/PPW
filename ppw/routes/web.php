<?php
/*
 * BOOT
 * */


Route::get('/',                'MainController@firstSignInASD');

Route::view('/boot',            'boot/boot');

Route::post('/signInASD', 'MainController@signInASD');
Route::post('/signInFounder', 'MainController@signInFounder');


Route::view('/boot-asd-done',   'boot/boot-asd-done');
Route::view('/boot-socio',      'boot/boot-socio');
Route::view('/boot-finished',   'boot/boot-finished');

//Route:view('/step','forms/step1');

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
Route::view('/homepage','home/homepage',$n);
Route::view('/managment','home/managment',$n);
Route::view('/secretariat','home/secretariat',$n);
Route::view('/mng-activity','home/mng-activity',$n);
Route::view('/report-stats','home/report-stats',$n);


