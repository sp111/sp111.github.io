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

Route::get('/', 'Customers\CustomersController@index');
//Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');
Route::get('create_customer', 'Customers\CustomersController@getCreateView');
Route::get('update_customer/{id}', 'Customers\CustomersController@getUpdateView');
Route::get('customer/{id}/delete', 'Customers\CustomersController@delete');
Route::resource('customer', 'Customers\CustomersController');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
