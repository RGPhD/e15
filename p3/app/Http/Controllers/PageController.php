<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        return view('pages.welcome');
    }


    public function contact()
    {
        return view('pages.contact');
    }
    //not showing up as a link on welcome page
}
# work on this code for p3