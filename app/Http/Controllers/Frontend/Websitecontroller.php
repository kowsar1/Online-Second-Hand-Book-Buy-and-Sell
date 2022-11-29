<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Websitecontroller extends Controller
{
    public function web()
    {
        $data=Category::all();
        $book=Book::all();
        return view('frontend.pages.home',compact('data','book'));
    }
    public function register(Request $request)
    {
     User::create([

      'name'=>$request->name,
      'email'=>$request->email,
      'password'=>bcrypt($request->password),
      'mobile'=>$request->mobile,
      'address'=>$request->address,
      'role'=>'customer'



     ]);
     notify()->success('Register  successfully');

     return redirect()->back();

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
       
       

        return view('frontend.pages.view');
    }

    
    public function update(Request $request)
    {
        

        $user=User::find(auth()->user()->id);
        $user->update([

            'name'=>$request->user_name,
            'mobile'=>$request->user_phone,
            'address'=>$request->user_address
        ]);
        notify()->success('update  successfully');
        return redirect()->back();
    }


    public function search(Request $request)
    {
        $searchResult=Book::where('name','LIKE','%'.$request->Search_key.'%')->get();

      return view('frontend.pages.search',compact('searchResult'));
    }
}
