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

            $PATH = '/home/managment/staff/';

            Route::view('internal', $PATH.'internal')->name('M111');
            Route::view('external',$PATH.'external')->name('M112');
            Route::view('stagista',$PATH.'stagista')->name('M113');
            Route::view('teacher',$PATH.'teacher')->name('M114');

        });

        Route::prefix('payments')->group(function($n){

            $PATH = '/home/managment/payments/';

            Route::view('made',     $PATH.'made')->name('M121');
            Route::view('received', $PATH.'received')->name('M122');


        });

    });


    Route::prefix('secretariat')->group(function($n){

        Route::prefix('members')->group(function($n){
            $PATH = '/home/secretariat/members/';

            Route::view('founder',  $PATH.'founder')->name('M211');
            Route::view('member',   $PATH.'member')->name('M213');
            Route::get('card', 'CardController@datacard')->name('M216');
        });

            $PATH = '/home/secretariat/providers/';
            Route::view('provider',$PATH.'provider')->name('M220');
    });

    Route::prefix('mngactivity')->group(function($n){
        $PATH = '/home/mng-activity/';

        Route::view('discipline', $PATH.'discipline')->name('M310');
        Route::view('course',     $PATH.'course')->name('M320');
        Route::view('package',    $PATH.'package')->name('M330');
        Route::view('room',       $PATH.'room')->name('M340');
        Route::view('calendar',   $PATH.'calendar')->name('M350');

    });

    Route::view('/report-stats','/home/report-stats')->name('M400');
});


















