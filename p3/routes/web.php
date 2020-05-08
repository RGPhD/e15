<?php

use Illuminate\Support\Facades\Route;

/*
Web routes are loaded by the RouteServiceProvider within a group which contains the "web" middleware group.
*/

Route::get('/', 'PageController@welcome');

# Query the database for a website and return a view to show each website & include website data

# Show all websites
Route::get('/websites', 'WebsiteController@index');
# or Route::get('/review', 'WebsiteController@review');
Route::get('/contact', 'PageController@contact');
Route::get('/login', 'PageController@login');
Route::get('/review-websites', [
    'middleware' => 'auth',
    'uses' =>'PageController@review']);
Route::get('/websites/category', 'WebsiteController@category');

# Show one website
Route::get('/websites/{name}', 'WebsiteController@show');

# Review a website
Route::get('/websites/{slug}/edit', [
    'middleware' => 'auth',
    'uses' =>'WebsiteController@edit']);
Route::put('/websites/{slug}', 'WebsiteController@update');
# I used put to Review (update) a website

# Members
Route::get('/members', [
    'middleware' => 'auth',
    'uses' =>'MemberController@show']);

Route::get('/members/{slug?}/add', [
    'middleware' => 'auth',
    'uses' =>'MemberController@add']);

Route::post('/members/{slug?}/add', [
        'middleware' => 'auth',
        'uses' =>'MemberController@save']);
    
# Show all users
Route::get('/community', [
        'middleware' => 'auth',
        'uses' =>'PageController@community']);

# My debug route; left it in for debugging
Route::get('/debug', function () {

    $debug = [
        'Environment' => App::environment(),
    ];

    try {
        $databases = DB::select('SHOW DATABASES;');
        $debug['Database connection test'] = 'PASSED';
        $debug['Databases'] = array_column($databases, 'Database');
    } catch (Exception $e) {
        $debug['Database connection test'] = 'FAILED: '.$e->getMessage();
    }

    dump($debug);
});

Auth::routes();