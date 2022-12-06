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
               
        ]);

      
        //database column name => input field name
        Category::create([
            'name' => $request->category_name,
            'status' => $request->status,
            'DOB' => $request->DOB
            
        ]);
       
        notify()->success('Category create successfully');

        return redirect()->route('category');




    }
    public function delete($product_id){
  
        $test=Category::find($product_id);
       //dd($product_id);
       if($test)
       {
           $test->delete();
           notify()->success('Category Delete successfully');

           return redirect()->route('category');
       }else{
        notify()->error('Category not found');

           return redirect()->route('category');
       }
}
public function view($product_id){
  
    $test=Category::find($product_id);
  return view('backend.page.category.view',compact('test'));
}
public function edit($category_id)
{
    $test=Category::find($category_id);
   
return view('backend.page.category.edit',compact('test'));

}

public function update(Request $request, $category_id)
{
    $test=Category::find($category_id);


$test->update([

    'name' => $request->category_name,
    'status' => $request->status,
    'DOB' => $request->DOB

]);
 //dd($test);die;
 return redirect()->route('category')->with('message','Category Update successfully.');

}
}
