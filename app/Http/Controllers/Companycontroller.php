<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Companycontroller extends Controller
{
    public function company()
    {
        return view('backend.fixed.page.company');
    }
}
