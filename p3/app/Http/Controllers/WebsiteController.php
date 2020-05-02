<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Arr;
use Str;
use App\Website;
use App\Organization;

class WebsiteController extends Controller
{

# work on this code for p3

public function index()
{
    $websites = Website::orderBy('name')->get();

    # Query database for new websites
    //$newwebsites = Website:orderByDesc('created_at')->orderBy('title')->limit(3)->get();

    # Or, filter out the new websites reviewed from the existing $websites Collection
    //$newwebsites = $websites->sortByDesc('created_at')->take(2);
    
    return view('websites.index')->with([
        'websites' => $websites,
        //'newWebsites' => $newWebsites
    ]);
  
 }
    
   // return view('websites.review')->with([
    //    'websites' => $websites,
        //'newwebsite$websites' => $newwebsite$websites
  //  ]);
    
  //  }
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

  /**
     * GET /websites/{slug}/review
     */
    public function edit(Request $request, $slug)
    {
        $website = Website::where('slug', '=', $slug)->first();

        return view('websites.edit')->with([
            'website' => $website
        ]);
    }

    /**
     * PUT /websites/{$slug}
     */
    public function update(Request $request, $slug)
    {
    $request->validate([
            /* 'slug' => 'required|unique:websites,slug,'.$website->id.'|alpha_dash',
             'name' => 'required',
             'organization' => 'required',
             'website_image' => 'url',
             'website_url' => 'url',
             'category' => 'required',*/
             'review' => 'required'
         ]);        

        $website = Website::where('slug', '=', $slug)->first();

        /*$website->slug = $request->slug;
        $website->name = $request->name;
        $website->organization = $request->organization;
        $website->website_image = $request->website_image;
        $website->website_url = $request->website_url;
        $website->category = $request->category;*/
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
        //'newWebsites' => $newWebsites if I want to let Users add new
    ]);

    }
        
}