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
        //'newBooks' => $newBooks
    ]);
    }
}