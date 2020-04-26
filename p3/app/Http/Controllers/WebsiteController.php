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
  public function show($slug)
    {
        $website = Website::where('slug', '=', $slug)->first();

        return view('websites.show')->with([
            'website' => $website,
            'slug' => $slug,
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
             'published_year' => 'required|digits:4',
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

    # Query database for new websites
    //$newwebsite$websites = website$website::orderByDesc('created_at')->orderBy('title')->limit(3)->get();

    # Or, filter out the new website$websites from the existing $websites Collection
    //$newwebsite$websites = $websites->sortByDesc('created_at')->take(3);
    
    return view('websites.category')->with([
        'websites' => $websites,
        //'newWebsites' => $newWebsites
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
        $output = 'Here are all the website$websites under the category '.$category;
        }
    **/
        
    }