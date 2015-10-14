<?php


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Reminder: 5 Route methods are: get, post, put, delete, or all

Route::get('/', function () {
    return view('index');
});

# Explicit routes for Books
Route::get('/books', 'BookController@getIndex');
Route::get('/books/show/{title?}', 'BookController@getShow');
Route::get('/books/create', 'BookController@getCreate');
Route::post('/books/create', 'BookController@postCreate');

# Alternative to the above, using implicit Controller routing
//Route::controller('/books','BookController');


Route::get('/practice', function() {

    $random = new Random();
    return $random->getRandomString(16);

});

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
