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

# Homepage
Route::get('/', 'PageController@welcome');

# Forms
Route::get('/forms', 'FormController@index');
Route::get('/forms/{title?}', 'FormController@show');