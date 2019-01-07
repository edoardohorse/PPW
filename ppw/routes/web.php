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

use App\Tools\RequestView;

define("JSON_VIEWS", file_get_contents(resource_path()."\\views\\scaletta.json"));


/**
 * // Risponde direttamene con una view
 *   Route::view('/login', 'welcome');
 *
 *
 */


/**
 * Usare questo link per definire lo schema da usare per il file view.json
 * http://jeremydorn.com/json-editor/?schema=N4IgLgngDgpiBcID2AjAVjAxmEAaEUATkrIWAJYwDOCoAbpQO43yiSwIgCGhhXEeEOTAwAtizbCANnEQMYjQe1nJ0WHPiIkYZShJCEYAR1rhoKqmELkAdgHNBAE2qZrUCkhucASuUwALPTAuAAIAVW8AGRAAX3wbLlEYADUmU2VOS2t7Jxc3Dy9EADkkJJD5RTiQBKTvJABXEXTzTKtbB3xnKldyd3JPThKy4ka4KpqYAAUuO1k2FsQs9tzu/P7CkCGYEKgZ21DdqiouYJCrROFtxxOuWM6b5o5EHj4BfAAzJEJRE85glBkgku4keKlQGGwgi0pAo1FM0NBrWyHRAXR6fQGxVK2wC5C4dG2L34d1RD1YZieICWOU6eV6BU4ABETkgQtcdlwjjxCVIpKEKrEYkLhUKgAA&value=N4Igbglgpg7gziAXAbVAJygRySEAaEAOwEMBbKANWhh3yLKgCUB7AVwBcpaCTyAFYgHMuiXAQAmxdsSSoQABzTN53EJOm0AvgF0dmoAA&theme=bootstrap2&iconlib=fontawesome4&object_layout=grid&show_errors=interaction
 */

//Route::view('/',     'main',                    returnName('Welcome'))->name('Welcome');

function newRouteAsView($view){
    Route::view(    GET_REQ($view),
                    GET_NAME_VIEW($view),
                    GET_NAME_ROUTE_AS_ARRAY($view)

                )->name(GET_NAME_ROUTE($view));
}
//dd($view1);
global $scaletta;
$scaletta = json_decode(JSON_VIEWS);

//var_dump($scaletta);

newRouteAsView(GET_VIEW('welcome'));
newRouteAsView(GET_VIEW('collab-interni'));
newRouteAsView(GET_VIEW('collab-esterni'));
newRouteAsView(GET_VIEW('stagisti'));
newRouteAsView(GET_VIEW('insegnanti'));

//setAllViews();

//Route::view('/home',    'main', returnName())->name('Welcome');

//Route::view('/home',     'main',                    returnName('Welcome'))->name('Welcome');




//Route::prefix('amministrazione')->group(function(){
//    Route::prefix('personale')->group(function(){
//        Route::view('collab-interni' ,  'main',     returnName('Collaboratori Interni'))->name('collab-interni');
//        Route::view('collab-esterni' ,  'main',     returnName('Collaboratori Esterni'))->name('collab-esterni');
//        Route::view('stagisti' ,        'main',     returnName('Stagisti'))->name('stagisti');
//        Route::view('insegnanti' ,      'main',     returnName('Insegnanti'))->name('insegnanti');
//
//    });
//
//    Route::prefix('pagamenti.')->group(function(){
//        Route::view('effettuati' ,      'main',     returnName('Effettuati'))->name('effettuati');
//        Route::view('ricevuti' ,        'main',     returnName('Ricevuti'))->name('ricevuti');
//
//    });
//});

function setAllViews(){
    global $scaletta;
    foreach($scaletta->views as $view){
//        var_dump($view);
        newRouteAsView($view);
    }
}

/**
 *
 * Testing Route
 */

Route::view('test', 'testIndex')->name('test');
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

function returnName($name){ return ['namePage' => $name];}
