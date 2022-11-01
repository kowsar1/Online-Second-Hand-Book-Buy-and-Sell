<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function user()
    {
        return view('backend.page.user.users');
    }
    public function create()
    {
        return view('backend.page.user.create');
    }
}
