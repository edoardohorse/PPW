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
    Route::view('/contact','boot/contact');
    Route::view('/whoare','boot/whoare');
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



Route::get('/internal','StaffController@internal',$n);
Route::get('/external','StaffController@external',$n);
Route::get('/stagista','StaffController@stagista',$n);
Route::get('/teacher','StaffController@teacher',$n);

Route::get('/made','PaymentController@made',$n);
Route::get('/received','PaymentController@received',$n);

Route::get('/founder','MemberController@founder',$n);
Route::get('/member','MemberController@member',$n);
Route::get('/card', 'MemberController@datacard',$n);

Route::get('/provider','MemberController@provider',$n);

Route::get('/discipline','ActivityController@discipline',$n);
Route::get('/course','ActivityController@course',$n);
Route::get('/package','ActivityController@package',$n);
Route::get('/room','ActivityController@room',$n);
Route::view('/calendar','home/mng-activity/calendar',$n);


Route::view('/report-stats','home/report-stats',$n);



