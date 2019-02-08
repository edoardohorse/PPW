<?php

Route::redirect('/', '/welcome');
Route::prefix('/welcome')->group(function(){

        // A000
        Route::get('/',             'BootController@firstSignInASD')                ->name('A000');

        // A001
        Route::view('/redirect',    'boot/welcome' , [ 'route' => 'A010',
                                                        'redirected' => 'true'])    ->name('A001');

});

// A010
Route::view('/boot',            'boot/boot')->name('A010');

Route::group(['middleware' => ['boot'] ], function(){

    /*
     * BOOT
     * */

    Route::view('/boot-asd-done',   'boot/boot-asd-done');
    Route::view('/boot-socio',      'boot/boot-socio');
    Route::view('/boot-finished',   'boot/boot-finished');

    /*
     * LOGIN
     * */
    Route::view('/login',           'login/login');
    Route::view('/login-done',      'login/login-done');
    Route::view('/login-failure',   'login/login-failure');


});

Route::post('/signInASD', 'BootController@signInASD');
Route::post('/signInFounder', 'BootController@signInFounder');






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


