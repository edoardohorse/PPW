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
*/

//use App\Http\Middleware\TestMiddlewareAge;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('/testAge', 'testAge')->name('testAge');
Route::view('/testRole', 'testRole')->name('testRole');

Route::post('/testAge',function(){
    return 'Sei nella pagina privata';
})  ->name('testAge')
    ->middleware('testAge');
    /*
     * oppure
     *
     * ->middleware(\App\Http\Middleware\TestMiddlewareAge::class);
     * */

Route::post('/testRole',function(){
    return 'Sei maggiorenne ed admin';
})  ->name('testRole')
    ->middleware('testRole:admin,18');