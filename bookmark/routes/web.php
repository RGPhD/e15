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

Route::get('/', function () {
   //comment out return '<h1>My Bookmark APP</>';
    return view('welcome');
});

Route::get('/example', function () {
    return 'Example... hello there!';
    
});

# Route::get('/books', function () {
#    return 'Here are all the books...';
# });

Route::get('/book/{id}', function ($id) {
    return 'You have requested book #'.$id;
});