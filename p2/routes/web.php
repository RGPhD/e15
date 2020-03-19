<?php

/*
|----------------------------------------------------------------------
| Web Routes for my application.
|----------------------------------------------------------------------
|
*/

# Homepage
Route::get('/', 'PageController@index');

# Forms
Route::get('/forms', 'FormController@index');
Route::get('/forms/{title?}', 'FormController@show');