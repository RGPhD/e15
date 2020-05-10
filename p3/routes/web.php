<?php

use Illuminate\Support\Facades\Route;

/* My p3 Web routes */

Route::get('/', 'PageController@welcome');
Route::get('/websites', 'WebsiteController@index');
Route::get('/contact', 'PageController@contact');
Route::get('/login', 'PageController@login');

Route::get('/review-websites', [
    'middleware' => 'auth',
    'uses' =>'PageController@review']);
Route::get('/websites/category', 'WebsiteController@category');

Route::get('/websites/{name}', 'WebsiteController@show');

# Review a website, I used put to Review (update) a website
Route::get('/websites/{slug}/edit', [
    'middleware' => 'auth',
    'uses' =>'WebsiteController@edit']);
Route::put('/websites/{slug}', 'WebsiteController@update');

# Members ONLY
Route::get('/members', [
    'middleware' => 'auth',
    'uses' =>'MemberController@show']);

Route::get('/members/{slug?}/add', [
    'middleware' => 'auth',
    'uses' =>'MemberController@add']);

Route::post('/members/{slug?}/add', [
        'middleware' => 'auth',
        'uses' =>'MemberController@save']);
    
Route::get('/community', [
        'middleware' => 'auth',
        'uses' =>'PageController@community']);

# My debug route, I left it in for debugging but no url from browser
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