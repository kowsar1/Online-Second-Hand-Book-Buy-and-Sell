<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bookscontroller extends Controller
{
    public function books()
    {
        return view('backend.page.books');
    }
}
