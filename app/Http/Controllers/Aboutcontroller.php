<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Aboutcontroller extends Controller
{
    public function about()
    {
        return view('backend.fixed.page.about');
    }
}
