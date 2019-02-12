<?php
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

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

Route::view('/whoare','boot/whoare')->name('C000');
Route::view('/contact','boot/contact')->name('C010');

Route::group(['middleware' => ['boot'] ], function(){

    /*
     * BOOT
     * */

    Route::view('/boot-asd-done',   'boot/boot-asd-done')->name('A011');
    Route::view('/boot-socio',      'boot/boot-socio')->name('A025');
    Route::view('/boot-finished',   'boot/boot-finished')->name('A030');

    /*
     * LOGIN
     * */
    Route::view('/login',           'login/login')->name('login');
    Route::view('/login-done',      'login/login-done')->name('B006');
    Route::view('/login-failure',   'login/login-failure')->name('B007');



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


Route::group(['prefix' => 'home',  'middleware' => 'auth'],function(){

    Route::view('/homepage','home/homepage')->name('M000');

    Route::prefix('managment')->group(function(){

        Route::prefix('staff')->group(function(){


            Route::get('/internal','StaffController@internal')->name('M111');
            Route::get('/external','StaffController@external')->name('M112');
            Route::get('/stagista','StaffController@stagista')->name('M113');
            Route::get('/teacher','StaffController@teacher')->name('M114');

            
        });

        Route::prefix('payments')->group(function(){


            Route::get('/made','PaymentController@made')->name('M121');
            Route::get('/received','PaymentController@received')->name('M122');


        });

    });


    Route::prefix('secretariat')->group(function(){

        Route::prefix('members')->group(function(){

            Route::get('/founder','MemberController@founder')->name('M211');
            Route::get('/member','MemberController@member')->name('M213');
            Route::get('/card', 'MemberController@datacard')->name('M216');
        });


            Route::get('/provider','MemberController@provider')->name('M220');
    });

    Route::prefix('mngactivity')->group(function(){


//        Route::get('/discipline','ActivityController@discipline')->name('M310');
//        Route::get('discipline/create', 'DisciplineController@create')->name('M311');

        Route::resource('discipline', 'DisciplineController',[
            'names' =>[
                'index'     => 'M310',
                'create'    => 'M311',
                'store'     => 'M312',
                'edit'      => 'M313',
                'update'    => 'M314',
                'delete'    => 'M315',
            ]
        ]);


        Route::resource('course', 'CourseController',[
            'names' =>[
                'index'     => 'M320',
                'create'    => 'M321',
                'store'     => 'M322',
                'edit'      => 'M323',
                'update'    => 'M324',
                'delete'    => 'M325',
            ]
        ]);


        Route::get('/package','ActivityController@package')->name('M330');
        Route::get('/room','ActivityController@room')->name('M340');
        Route::get('/calendar','CalendarController@calendar')->name('M350');

    });

Route::view('/report-stats','/home/report-stats')->name('M400');
});


Route::get('/pdf','PdfController@pdf');

Route::get('/pdf-invoice', 'PdfController@pdfinvoices');





























Route::view('/report-stats','home/report-stats');






//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
