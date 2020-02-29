<?php

/* Web Routes */

Route::get('/', 'PageController@welcome');
Route::get('/books', 'BookController@index');
Route::get('/books/{title}', 'BookController@show');
           // or with ? after title?
Route::get('/filter/{category}/{subcategory?}', 'BookController@filter');