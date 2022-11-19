<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Usercontroller extends Controller
{
   public function login()
   {

return view('backend.page.log.login');

   }


   public function dologin(Request $request)
   {

      $test=$request->except('_token');
      if(Auth::attempt($test))
      {

         return redirect()->route('home');
      }
      return redirect()->back()->with('message','Invalid Email or Password');
   }
   public function logout()
   {
       Auth::logout();
       
       return redirect()->route('login')->with('message','Logout successful.');
      }
}
