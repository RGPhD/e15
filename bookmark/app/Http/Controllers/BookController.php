<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        return 'Here are all the books!';
    //
    }

    /* GET /books/{title}
*/
public function show($title)
{ /* or ($title = null) */
    return 'You have requested results for the book: '.$title;
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