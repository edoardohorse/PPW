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
    https://laravel.com/docs/5.7/routing
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',function(){
    return 'Sei nella home';
});

/**
 * // Risponde direttamene con una view
 *   Route::view('/login', 'welcome');
 *
 *
 */



Route::view('/login',    'login');
Route::view('/home',     'welcome');

Route::prefix('amministrazione')->group(function(){
    Route::prefix('personale')->group(function(){
        Route::view('collab-interni' ,'collab-interni');
        Route::view('collab-esterni' ,'collab-esterni');
        Route::view('stagisti' ,'stagisti');
        Route::view('insegnanti' ,'insegnanti');

    });

    Route::prefix('pagamenti')->group(function(){
        Route::view('effettuati' ,'effettuati');
        Route::view('ricevuti' ,'ricevuti');

    });
});



/**
 *
 * Testing Route
 */

Route::view('test', 'testIndex');
Route::view('testForm', 'testForm');
Route::view('testAjax', 'testAjax');
Route::view('testFile', 'testFile');

Route::prefix('/reqAjax/')->group(function(){
    Route::get('{testo?}',  'TestRoute@ajaxGET');
    Route::post('',         'TestRoute@ajaxPOST');
});

Route::prefix('/reqForm/')->group(function(){
    Route::get('',  'TestRoute@formGET');
    Route::post('',         'TestRoute@formPOST');
});


Route::post('/testFile','TestRoute@fileUpload');