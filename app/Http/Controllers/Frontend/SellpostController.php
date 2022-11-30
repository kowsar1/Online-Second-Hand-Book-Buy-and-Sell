<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Sellpost;
use Illuminate\Http\Request;

class SellpostController extends Controller
{
    public function create(Request $request)
    {
        // dd($request->all());
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


        Sellpost::create([
            'category_id' => $request->category_id,
            'name' => $request->product_name,
            'image' => $fileName,
            'stock' => $request->product_stock,
            'price' => $request->product_price,
            'status' => 'Inactive',
            'description' => $request->description
        ]);
        notify()->success('Book create  successfully');

        return redirect()->route('webhome');


    }
    public function view()
    {
        $post=Sellpost::paginate(5);
        //dd($post->all());
        return view('backend.page.sellpost.view',compact('post'));
    }
    public function edit($sell_id)
    {
        $sell=Sellpost::find($sell_id);
        $data=Category::all();

       //dd($sell);
       return view('backend.page.sellpost.edit',compact('sell','data'));
    }
    public function update($sell_id)
    {
       
        $sell=Sellpost::find($sell_id);

       $sell->update([
        'status' => 'active',
       ]);
       
       notify()->success('post Varified');
       return redirect()->route('sellpost.view');

    }
    public function delete(int $sell_id)
    {
           $test=Sellpost::find($sell_id);
             if($test)
             {
                 $test->delete();
                 notify()->success('Post  Rejected  successfully');
                 return redirect()->route('sellpost.view');
             }else{
                notify()->error('post not found');
                 return redirect()->route('sellpost.view');
             }
    
            }
        }
    

