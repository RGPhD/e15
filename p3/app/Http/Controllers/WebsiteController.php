<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Arr;
use Str;
use App\Website;

class WebsiteController extends Controller
{

# work on this code for p3

public function index()
{
    $websites = Website::orderBy('name')->get();

    # Query database for new websites
    //$newBooks = Book::orderByDesc('created_at')->orderBy('title')->limit(3)->get();

    # Or, filter out the new books from the existing $books Collection
    //$newBooks = $books->sortByDesc('created_at')->take(3);
    
    return view('websites.index')->with([
        'websites' => $websites,
        //'newWebsites' => $newWebsites
    ]);
  
    }

    public function review()
    {
        $websites = Website::orderBy('name')->get();

    # Query database for new websites
    //$newWebites = Website::orderByDesc('created_at')->orderBy('title')->limit(3)->get();

    # Or, filter out the new books from the existing $books Collection
    //$newBooks = $books->sortByDesc('created_at')->take(3);
    
    return view('websites.review')->with([
        'websites' => $websites,
        //'newBooks' => $newBooks
    ]);
    
    }

    public function show($category = null)
    {
     return 'You want to view the details for the websites in the:  '.$category;
    }

    /**
     * GET /filter/{$category}/{subcategory?}
     * Example demonstrating multiple parameters
     * Not a feature we're actually building, so commenting out.  I want to create category feature, but not subcategory for my p3 unique feature.
     **/
    /*
    public function category($category)
    {
        $output = 'Here are all the books under the category '.$category;
        }
    **/
        
    }