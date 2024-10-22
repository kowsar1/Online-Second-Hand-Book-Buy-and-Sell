<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class Bookscontroller extends Controller
{
    public function list()
    {
        $categories=Book::paginate(5);
        // dd($categories->all());
return view('backend.page.book.book',compact('categories'));
    }

    public function create()
    {
        $categories=Category::all();

        return view('backend.page.book.createbook',compact('categories'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'product_name' => 'required',
            'product_price' => 'required|numeric',
            'product_stock' => 'required|numeric',
            'category_id' => 'required',
//            'image'=>'required|mimes:jpeg,jpg,png,gif'
            'image'=>'required'
        ]);

        $fileName=null;
        if($request->hasFile('image'))
        {
            // generate name
            $fileName=date('Ymdhis').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads/',$fileName);
        }


        Book::create([
            'category_id' => $request->category_id,
            'name' => $request->product_name,
            'image' => $fileName,
            'stock' => $request->product_stock,
            'price' => $request->product_price,
            'status' => $request->status,
            'description' => $request->description
        ]);
        notify()->success('Book create  successfully');

        return redirect()->route('book');


    }

    public function delete(int $book_id)
    {
           $test=Book::find($book_id);
             if($test)
             {
                 $test->delete();
                 notify()->success('Book deleted  successfully');
                 return redirect()->route('book');
             }else{
                notify()->error('Book not found');
                 return redirect()->route('book');
             }


//        Product::findOrFail($product_id)->delete();
//        return redirect()->back()->with('message','Book deleted successfully.');
    }

    public function view($book_id)
    {
      $test=Book::find($book_id);
      return view('backend.page.book.view',compact('test'));
    }
    public function edit($book_id)
    {
        $book=Book::find($book_id);
        $categories=Category::all();
        return view('backend.page.book.edit',compact('categories','book'));
    }

    public function update(Request $request,$book_id)
    {
        
        $book=Book::find($book_id);
        // dd($book);die;

       $fileName=$book->image;

       if($request->hasFile('image'))
       {
    //     $removeimage=public_path().'/uploads/'.$fileName;
    // //    dd($removeimage);

    //     File::delete($removeimage);
           // generate name
           $fileName=date('Ymdhis').'.'.$request->file('image')->getClientOriginalExtension();
           $request->file('image')->storeAs('/uploads',$fileName);
       }

       $book->update([
        'category_id' => $request->category_id,
        'name' => $request->product_name,
        'image' => $fileName,
        'stock' => $request->product_stock,
        'price' => $request->product_price,
        'status' => $request->status,
        'description'=> $request->description
       ]);
       
       notify()->success('Book update  successfully');
       return redirect()->route('book');

    }
}