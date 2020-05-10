<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Arr;
use Str;
use App\Website;
use App\Organization;

class WebsiteController extends Controller
{

public function index()
{
    $websites = Website::orderBy('name')->get();

    
    return view('websites.index')->with([
        'websites' => $websites,
    ]);
  
 }
    
  public function show(Request $request, $slug)
    {
        $website = Website::where('slug', '=', $slug)->first();

        $user = $request->user();

        return view('websites.show')->with([
            'userName' => $user->name ?? null,
            'website' => $website,
            'slug' => $slug
        ]);
    }

    public function edit(Request $request, $slug)
    {
        $website = Website::where('slug', '=', $slug)->first();

        return view('websites.edit')->with([
            'website' => $website
        ]);
    }

    public function update(Request $request, $slug)
    {
    $request->validate([
            
             'review' => 'required'
         ]);        

        $website = Website::where('slug', '=', $slug)->first();

        $website->review = $request->review;
        $website->save();

       return redirect('/websites/'.$slug.'/edit')->with([
            'flash-alert' => 'Your review was saved.'
        ]);       
    }

    public function category()
    {
        $websites = Website::orderBy('category')->get();
    
    return view('websites.category')->with([
        'websites' => $websites,

    ]);

    }
        
}