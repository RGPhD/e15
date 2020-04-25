<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * GET /
     */
    public function welcome()
    {
        # Using the global `session` helper, we can extract our data that was
        # passed from `BookController@search` as part of the redirect
        $searchTerms = session('searchTerms', null);
        $searchType = session('searchType', null);
        $searchResults = session('searchResults', null);

        # Return the view, making the above data available for use in the video
        return view('pages.welcome')->with([
            'searchTerms' => $searchTerms,
            'searchType' => $searchType,
            'searchResults' => $searchResults
        ]);
    }

    /**
     * GET /review website, build review website form
     */
    public function support()
    {
        return view('pages.support');
    }

    public function login()
    {
        return 'Login Here';
        //return view('pages.login');
    }
}