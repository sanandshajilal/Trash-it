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
Route::post('/pickup','EmployeeController@pickup');
Route::get('/pickup/{id}','EmployeeController@viewpickup');

Route::get('/customer','CustomerController@index');
Route::post('/customer/booking','CustomerController@booking');

Route::get('/stockmaster','StockMasterController@index');
Route::get('/sales','StockMasterController@sales');
Route::post('/newsale','StockMasterController@newsale');


Route::get('/admin','AdminController@index');
Route::get('/emplist','AdminController@emplist');
Route::get('/userlist','AdminController@userlist');
Route::get('/vendorlist','AdminController@vendorlist');
Route::get('/itemlist','AdminController@itemlist');
Route::get('/report','AdminController@report');
Route::get('/feedback','AdminController@feedback');


Route::get('/addemp','AdminController@addemployee');
Route::post('/addemp','AdminController@createemployee');
Route::get('/delemp/{id}','AdminController@delemployee');

Route::get('/additem','AdminController@additem');
Route::post('/newitem','AdminController@newitem');
Route::get('/delitem/{id}','AdminController@delitem');

Route::get('/addvendor','AdminController@addvendor');
Route::post('/newvendor','AdminController@newvendor');
Route::get('/delvendor/{id}','AdminController@delvendor');
Route::get('/vendordetails/{name}','AdminController@vendordetails');

Route::post('/userdetails','CustomerController@userdetails');

/*items*/

Route::get('/items','EmployeeController@items');
Route::get('/exportexcel','AdminController@exportexcel');
