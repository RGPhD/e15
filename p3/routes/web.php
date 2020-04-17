<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', 'PageController@welcome');
//Route::get('/', function () {
    //return "My P3 APP";
    // return view('welcome');
    // change this to  p3 view
//});

//Route::get('/websites/{name?}', function($name) {
//return 'View the name of the website: ' .$name;
//});
# Query the database for a website

# Return a view to show the website
# Include website data

// # Show all websites
Route::get('/websites', 'WebsiteController@index');
Route::get('/review', 'WebsiteController@review');
Route::get('/contact', 'PageController@contact');

Route::get('/websites/{name?}', 'WebsiteController@show');

Route::get('/debug', function () {

    $debug = [
        'Environment' => App::environment(),
    ];

    /*
    The following commented out line will print your MySQL credentials.
    Uncomment this line only if you're facing difficulties connecting to the
    database and you need to confirm your credentials. When you're done
    debugging, comment it back out so you don't accidentally leave it
    running on your production server, making your credentials public.
    */
    #$debug['MySQL connection config'] = config('database.connections.mysql');

    try {
        $databases = DB::select('SHOW DATABASES;');
        $debug['Database connection test'] = 'PASSED';
        $debug['Databases'] = array_column($databases, 'Database');
    } catch (Exception $e) {
        $debug['Database connection test'] = 'FAILED: '.$e->getMessage();
    }

    dump($debug);
});

//Route::get('/category/{category}', 
//'WebsiteController@category');