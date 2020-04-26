<?php

use Illuminate\Support\Facades\Route;

/*
Web Routes for your application. 
routes are loaded by the RouteServiceProvider within a group which contains the "web" middleware group.
*/

Route::get('/', 'PageController@welcome');
//Route::get('/', function () {
    //return "My P3 APP";
    // return view('welcome');
//});


# Query the database for a website
# Return a view to show each website & include website data

// # Show all websites
Route::get('/websites', 'WebsiteController@index');
# Route::get('/review', 'WebsiteController@review');
Route::get('/contact', 'PageController@contact');
Route::get('/login', 'PageController@login');
Route::get('/review-websites', [
    'middleware' => 'auth',
    'uses' =>'PageController@review']);
Route::get('/websites/category', 'WebsiteController@category');

//Route::get('/websites/{name?}', function($name) {
 //   return 'View the name of the website: ' .$name;
  //  });

// # Show one website
Route::get('/websites/{name}', 'WebsiteController@show');

# Review a website
Route::get('/websites/{slug}/edit', [
    'middleware' => 'auth',
    'uses' =>'WebsiteController@edit']);
Route::put('/websites/{slug}', 'WebsiteController@update');
# put or get to Review and update a website

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
Auth::routes();