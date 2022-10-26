<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Applicationcontroller extends Controller
{
    public function application()
    {
        return view('backend.fixed.page.application');
    }
}
