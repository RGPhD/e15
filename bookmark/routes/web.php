<?php

# Example route used to demonstrate error pages
Route::get('/example', function () {
    //$foo = [1,2,3];

    # dump, die
    //dd(storage_path('temp'));

    # dump, die, debug
    //ddd($foo);

    //Log::info($foo);

    return 'example route';
});

Route::get('/edit', function () {

    return ('books.edit');
});

Route::get('/book', 'BookController@index');

/* Web Routes */

Route::get('/', 'PageController@welcome');
Route::get('/books', 'BookController@index');
Route::get('/books/{title}', 'BookController@show');
           // or with ? after title?
Route::get('/filter/{category}/{subcategory?}', 'BookController@filter');