<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ordercontroller extends Controller
{
    public function order()
    {
        return view('backend.page.order');
    }
}
