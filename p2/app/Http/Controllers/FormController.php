<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * GET /forms 
     */
    public function index(Request $request) {
    
        $request->validate([
            'hips'  => 'required|digits:2',
            'waist' => 'required|digits:2',
            'gender' => 'required'
        ]);
        # Profressor suggests red styling for errors
        # Note: if validation fails, it will redirect
        # back to `/` (page from which the form was submitted)

        return view('forms.index')->with(['forms' => [
            ['title' => 'Hips'],
            ['title' => 'Waist'],
            ['title' => 'WTH Ratio Form Data']
        ]]);
    }

    /**
     * GET /form/{title}
     */
    public function show($title)
    {
        # Query the database for a form where the title = $title
        # Return a view to show the form
        # Include the form data
        //return 'Here are the details for the form: ' . $title;

        $formFound = true;
        
        return view('forms.show')->with(['title' => $title, 'formFound' => $formFound]);
    }
}