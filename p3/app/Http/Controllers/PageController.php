<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Website;

class PageController extends Controller
{
    public function welcome()
    {
        return view('pages.welcome');
    }

    public function review()
    {
        $websites = Website::orderBy('name')->get();
        return view('pages.review-websites')->with([
            'websites' => $websites,
    ]);
    }

    public function contact()
    {
        return view('pages.contact');
    }

}