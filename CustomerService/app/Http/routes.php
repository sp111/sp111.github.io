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


$app->get('/', function() use ($app) {
    return $app->welcome();
});

$app->get('/api/customer','App\Http\Controllers\Customers\CustomersController@index');
$app->post('/api/customer','App\Http\Controllers\Customers\CustomersController@store');

$app->get('/api/customer/{id}','App\Http\Controllers\Customers\CustomersController@getCustomerById');
$app->put('/api/customer/{id}','App\Http\Controllers\Customers\CustomersController@update');
$app->delete('/api/customer/{id}','App\Http\Controllers\Customers\CustomersController@delete');