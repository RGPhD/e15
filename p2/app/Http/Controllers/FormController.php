<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * GET /forms
     */
    public function index()
    {
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