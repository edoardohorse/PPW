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

//    Route::view('/homepage','home/homepage')->name('M000');


    Route::prefix('managment')->group(function(){

        Route::prefix('staff')->group(function(){



            Route::resource('internal', 'StaffInternalController',[
                'names' =>[
                    'index'     => 'M110',
                    'create'    => 'M111',
                    'store'     => 'M112',
                    'edit'      => 'M113',
                    'update'    => 'M114',
                    'destroy'    => 'M115',
                    'show'      => 'M116',
                ]
            ]);

            Route::resource('external', 'StaffExternalController',[
                'names' =>[
                    'index'     => 'M120',
                    'create'    => 'M121',
                    'store'     => 'M122',
                    'edit'      => 'M123',
                    'update'    => 'M124',
                    'destroy'    => 'M125',
                    'show'      => 'M126',
                ]
            ]);



            Route::resource('teacher', 'TeacherController',[
                'names' =>[
                    'index'     => 'M130',
                    'create'    => 'M131',
                    'store'     => 'M132',
                    'edit'      => 'M133',
                    'update'    => 'M134',
                    'destroy'    => 'M135',
                    'show'      => 'M136',

                ]
            ]);

            Route::get('teacher/{id}/course',   'TeacherController@course')->name('M137');
            Route::post('teacher/{id}/course',  'TeacherController@assignCourse')->name('M138');

            Route::resource('stagista', 'StagistaController',[
                'names' =>[
                    'index'     => 'M140',
                    'create'    => 'M141',
                    'store'     => 'M142',
                    'edit'      => 'M143',
                    'update'    => 'M144',
                    'destroy'    => 'M145',
                    'show'      => 'M146',
                ]
            ]);

            Route::get('stagista/{id}/course',   'StagistaController@course')->name('M147');
            Route::post('stagista/{id}/course',  'StagistaController@assignCourse')->name('M148');




            
        });

        Route::prefix('payments')->group(function(){


//            Route::get('/made','PaymentController@made')->name('M121');
//            Route::get('/received','PaymentController@received')->name('M122');


        });

    });


    Route::prefix('secretariat')->group(function(){

        Route::prefix('members')->group(function(){

            Route::get('/founder','MemberController@founder')->name('M211');

            Route::resource('member', 'AllievoController',[
                'names' =>[
                    'index'     => 'M220',
                    'create'    => 'M221',
                    'store'     => 'M222',
                    'edit'      => 'M223',
                    'update'    => 'M224',
                    'destroy'    => 'M225',
                    'show'      => 'M226',
                ]
            ]);

            Route::get('member/{id}/course',   'AllievoController@course')->name('M227');
            Route::post('member/{id}/course',  'AllievoController@assignCourse')->name('M228');
            Route::get('hour',  'AllievoController@getHour');

            Route::get('/card', 'MemberController@datacard')->name('M211');
        });


            Route::get('/provider','MemberController@provider')->name('M211');
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
                'destroy'    => 'M315',
                'show'      => 'M316',
            ]
        ]);


        Route::resource('course', 'CourseController',[
            'names' =>[
                'index'     => 'M320',
                'create'    => 'M321',
                'store'     => 'M322',
                'edit'      => 'M323',
                'update'    => 'M324',
                'destroy'    => 'M325',
                'show'      => 'M326',
            ]
        ]);

        Route::resource('package', 'PackageController',[
            'names' =>[
                'index'     => 'M330',
                'create'    => 'M331',
                'store'     => 'M332',
                'edit'      => 'M333',
                'update'    => 'M334',
                'destroy'    => 'M335',
                'show'      => 'M336',
                ]
        ]);

        Route::resource('room', 'RoomController',[
            'names' =>[
                'index'     => 'M340',
                'create'    => 'M341',
                'store'     => 'M342',
                'edit'      => 'M343',
                'update'    => 'M344',
                'destroy'    => 'M345',
                'show'      => 'M346',
                ]
        ]);

        Route::resource('scheduling', 'SchedulingController',[
            'names' =>[
                'index'     => 'M350',
                'create'    => 'M351',
                'store'     => 'M352',
                'edit'      => 'M353',
                'update'    => 'M354',
                'destroy'    => 'M355',
                'show'      => 'M356',
            ]
        ]);


    });

    Route::redirect('/homepage', route('M350'));

Route::get('/report-stats','ChartsController@charts')->name('M400');
});



Route::get('/pdf','PdfController@pdf');

Route::get('/pdf-invoice', 'PdfController@pdfinvoices');





























Route::view('/report-stats','home/report-stats');






//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
