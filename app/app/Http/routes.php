<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::controllers([
	'auth' => 'Auth\AuthController'
]);

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/','MainController@index');
Route::post('/contact','MainController@contact');
Route::post('/register', 'MainController@Register');
Route::post('/booking','MainController@booking');

/* logged in pages */
Route::get('/employee','EmployeeController@index');
Route::get('/customer','CustomerController@index');
Route::get('/admin','AdminController@index');


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
