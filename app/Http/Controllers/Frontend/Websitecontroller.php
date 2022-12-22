<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use App\Models\Sellpost;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Websitecontroller extends Controller
{
    public function web()
    {
        $data = Category::where('status', 'active')->get();
        $sell = Sellpost::where('status', 'active')->where('stock', '>', 0)->get();
        $book = Book::all();
        return view('frontend.pages.home', compact('data', 'book', 'sell'));
    }
    public function register(Request $request)
    {
        $request->validate([

            'name' => 'required',
            'email' => 'required |email','required|unique:users,email',
            'password' => 'required',
            'mobile' =>'required',
            'address' => 'required',
            'mobile' => 'regex:/^\\+?[1-9][0-9]{7,14}$/'

        ]);
        User::create([

            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'mobile' => $request->mobile,
            'address' => $request->address,
            'role' => 'customer'

            //   if(mobile!='mobile')
            //   {

            //   }


        ]);
        notify()->success('Register  successfully');

        return redirect()->back();
    }
    public function login(Request $request)

    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $test = $request->except('_token');
        // dd($test); die;
        if (auth()->attempt($test)) {
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

        $sellpost = Sellpost::where('user_id', auth()->user()->id)->get();

        return view('frontend.pages.view', compact('sellpost'));
    }


    public function update(Request $request)
    {


        $user = User::find(auth()->user()->id);
        $user->update([

            'name' => $request->user_name,
            'mobile' => $request->user_phone,
            'address' => $request->user_address
        ]);
        notify()->success('update  successfully');
        return redirect()->back();
    }


    public function search(Request $request)
    {
        $searchResult = Sellpost::where('name', 'LIKE', '%' . $request->Search_key . '%')
            ->where('status', 'active')->get();

        return view('frontend.pages.search', compact('searchResult'));
    }


    public function category($sell_id)
    {
        // dd($sell_id);
        $searchResult = Sellpost::where('category_id', 'LIKE', '%' . $sell_id . '%')
            ->where('status', 'active')->get();

        return view('frontend.pages.category', compact('searchResult'));
    }

    public function view_book($book_id)
    {
        $test = Sellpost::find($book_id);
        // dd($book);
        return view('frontend.pages.view_book', compact('test'));
    }
}
