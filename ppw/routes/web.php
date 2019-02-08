<?php

Route::redirect('/', '/welcome');
Route::prefix('/welcome')->group(function(){

        // A000
        Route::get('/',             'BootController@firstSignInASD')                ->name('A000');

        // A001
        Route::view('/redirect',    'boot/welcome' , [ 'route' => 'A010',
                                                        'redirected' => 'true'])    ->name('A001');

});


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



Route::view('/internal','home/managment/staff/internal',$n);
Route::view('/external','home/managment/staff/external',$n);
Route::view('/stagista','home/managment/staff/stagista',$n);
Route::view('/teacher','home/managment/staff/teacher',$n);

Route::view('/made','home/managment/payments/made',$n);
Route::view('/received','home/managment/payments/received',$n);

Route::view('/founder','home/secretariat/members/founder',$n);
Route::view('/member','home/secretariat/members/member',$n);
Route::get('/card', 'CardController@datacard',$n);

Route::view('/provider','home/secretariat/providers/provider',$n);

Route::view('/discipline','home/mng-activity/discipline',$n);
Route::view('/course','home/mng-activity/course',$n);
Route::view('/package','home/mng-activity/package',$n);
Route::view('/room','home/mng-activity/room',$n);
Route::view('/calendar','home/mng-activity/calendar',$n);


Route::view('/report-stats','home/report-stats',$n);



