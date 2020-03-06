<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return view('books.index')->with(['books' => [
            ['title' => 'War and Peace'],
            ['title' => 'The Great Gatsby']
        ]]);
    }

    /* GET /books/{title}
*/

 /* public function show($title = null)
{
    dump($title);
    return view('books.show');
}end */


public function show($title)
    {
        # Query the database for a book where the title = $title
        # Return a view to show the book
        # Include the book data
        //return 'Here are the details for the book: ' . $title;

        $bookFound = true;
        
        return view('books.show')->with(['title' => $title, 'bookFound' => $bookFound]);
    }

/* GET /filter/{$category}/{subcategory?}
     */
    public function filter($category, $subcategory = null)
    {
        $output = 'Here are all the books under the category '.$category;

        if ($subcategory) {
            $output .= ' and also the subcategory '.$subcategory;
        }

        return $output;
    }

}