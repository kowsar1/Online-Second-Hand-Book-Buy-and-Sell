<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    public function category()
    {
        $cats=Category::paginate(5);
        //dd($cats);
             return view('backend.page.category.category',compact('cats'));
    }

public function create()
    {
          return view('backend.page.category.create');
    }




    public function store(REQUEST $request)

    {
        //dd($request->all());
     $request->validate([
        'category_name'=>'required|unique:categories,name',
        'password'=>'required|min:8'
    ]);
          //database column name => input field name
         Category::create([
            'name'=>$request->category_name,
            'password'=>$request->password,
            'DOB'=>$request->DOB
       ]);
       return redirect()->route('category');
       
    }
}
