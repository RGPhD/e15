<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Website;

class MemberController extends Controller
{
    public function show(Request $request) {
        $websites = $request->user()->websites->sortByDesc('pivot.created_at');

        return view('members.show')->with(['websites' => $websites]);
    }

    public function add($slug) 
    {
        $website = Website::findBySlug($slug);

        return view('members.add')->with(['website' => $website]);
    }

    public function save(Request $request, $slug) {
        
        $website = Website::findbySlug($slug);

        $request->user()->websites()->save($website, ['my_review' => $request->my_review]);

        return redirect('/members')->with([
            'flash-alert' => 'Your chosen website ' .$website->name. ' and or review was saved.'
        ]);
    }
}