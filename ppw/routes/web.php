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


Route::prefix('home')->group(function($n){

    Route::prefix('managment')->group(function($n){

        Route::prefix('staff')->group(function($n){


            Route::get('/internal','StaffController@internal',$n)->name('M111');
            Route::get('/external','StaffController@external',$n)->name('M112');
            Route::get('/stagista','StaffController@stagista',$n)->name('M113');
            Route::get('/teacher','StaffController@teacher',$n)->name('M114');

        });

        Route::prefix('payments')->group(function($n){


            Route::get('/made','PaymentController@made',$n)->name('M121');
            Route::get('/received','PaymentController@received',$n)->name('M122');


        });

    });


    Route::prefix('secretariat')->group(function($n){

        Route::prefix('members')->group(function($n){

            Route::get('/founder','MemberController@founder',$n)->name('M211');
            Route::get('/member','MemberController@member',$n)->name('M213');
            Route::get('/card', 'MemberController@datacard',$n)->name('M216');
        });


            Route::get('/provider','MemberController@provider',$n)->name('M220');
    });

    Route::prefix('mngactivity')->group(function($n){

        Route::get('/discipline','ActivityController@discipline',$n)->name('M310');
        Route::get('/course','ActivityController@course',$n)->name('M320');
        Route::get('/package','ActivityController@package',$n)->name('M330');
        Route::get('/room','ActivityController@room',$n)->name('M340');
        Route::view('/calendar','home/mng-activity/calendar',$n)->name('M350');

    });

Route::view('/report-stats','/home/report-stats')->name('M400');
});



Route::get('/pdf','PdfController@pdf');

Route::view('/view_pdf','Pdf/payments-pdf');




















Route::view('/report-stats','home/report-stats',$n);





