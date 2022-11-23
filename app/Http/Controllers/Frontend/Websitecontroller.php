<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class Websitecontroller extends Controller
{
    public function web()
    {
        $data=Category::all();
        return view('frontend.master',compact('data'));
    }
    public function register(Request $request)
    {
     User::create([

      'name'=>$request->name,
      'email'=>$request->email,
      'password'=>$request->password,
      'mobile'=>$request->mobile,
      'role'=>'customer'



     ]);
    // dd($request->all()); die;

     return redirect()->back()->with('message','Account create Successfully');

    }
}
