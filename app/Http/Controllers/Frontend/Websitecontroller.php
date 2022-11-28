<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
      'password'=>bcrypt($request->password),
      'mobile'=>$request->mobile,
      'role'=>'customer'



     ]);
    

     return redirect()->back()->with('message','Account create Successfully');

    }
    public function login(Request $request)

    {
        
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);
    
    $test=$request->except('_token');
    // dd($test); die;
   if(auth()->attempt($test))
   {
    notify()->success('login successfully');
    return redirect()->back();
   }
   notify()->error('invalid request!');
   return redirect()->back();

    
    }
    public function logout()
    {
        Auth::logout();
        notify()->success('logout  successfully');

        return redirect()->route('webhome');
    }

    public function profile()
    {
       
       

        return view('');
    }
    
}
