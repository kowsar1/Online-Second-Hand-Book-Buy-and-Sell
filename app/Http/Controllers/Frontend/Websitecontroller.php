<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class Websitecontroller extends Controller
{
    public function web()
    {
        $data=Category::all();
        return view('frontend.master',compact('data'));
    }
}
