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

    public function show($slug)
    {
        $website = Website::where('slug', '=', $slug)->first();

        return view('websites.show')->with([
            'website' => $website,
            'slug' => $slug,
        ]);
    }

    
    public function category()
    {
        $categories = Website::orderBy('category')->get();

        # Query database for new websites
        //$newWebites = Website::orderByDesc('created_at')->orderBy('title')->limit(3)->get();
    
        # Or, filter out the new books from the existing $books Collection
        //$newBooks = $books->sortByDesc('created_at')->take(3);
        
        return view('websites.category')->with([
            'categories' => $categories,
            //'newBooks' => $newBooks
        ]);
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