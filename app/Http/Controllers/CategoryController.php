<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    public function category()
    {
        $cats = Category::paginate(5);
        //dd($cats);
        return view('backend.page.category.category', compact('cats'));
    }

    public function create()
    {
        return view('backend.page.category.create');
    }




    public function store(REQUEST $request)

    {
        //dd($request->all());
        $request->validate([
            'category_name' => 'required|unique:categories,name',
            'password' => 'required|min:8'
        ]);

        $filename=null;
        if($request->hasFile('image'))
    {
        $filename=date('Ymdthis').'.'.$request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('/upload',$filename);
    }
        //database column name => input field name
        Category::create([
            'name' => $request->category_name,
            'password' => $request->password,
            'DOB' => $request->DOB,
            'image'=>$filename
        ]);
       

        return redirect()->route('category');




    }
    public function delete($product_id){
  
        $test=Category::find($product_id);
       //dd($product_id);
       if($test)
       {
           $test->delete();
           return redirect()->back()->with('message','product deleted successfully.');
       }else{
           return redirect()->back()->with('error','product not found.');
       }
}
public function view($product_id){
  
    $test=Category::find($product_id);
  return view('backend.page.category.view',compact('test'));
}
}
