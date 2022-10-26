<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tablecontroller extends Controller
{
    public function table()
    {
        return view('backend.fixed.page.table');
    }
}
