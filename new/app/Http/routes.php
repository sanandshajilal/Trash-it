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

Route::controllers([
	'auth' => 'Auth\AuthController'
]);

Route::get('/','MainController@index');
Route::post('/contact','MainController@contact');
Route::post('/register', 'MainController@Register');
Route::post('/booking','MainController@booking');

/* logged in pages */
Route::get('/employee','EmployeeController@index');
Route::get('/empprofile','EmployeeController@empprofile');
Route::get('/customer','CustomerController@index');
Route::post('/customer/booking','CustomerController@booking');

Route::get('/admin','AdminController@index');
Route::get('/emplist','AdminController@emplist');
Route::get('/userlist','AdminController@userlist');
Route::get('/report','AdminController@report');

Route::get('/addemp','AdminController@addemployee');
