<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Sellpost;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Homecontroller extends Controller
{
    public function home()
    {
        $totalSellPost=Sellpost::where('status','active')->count();
        $totalBooks=Sellpost::where('status','active')->count();
        $totalcategories=Category::count();
        $totalSells=Sellpost::sum('decressed_stock');
        $post=Sellpost::all();
        $data=Category::all();


        return view('backend.page.dashboard',compact('totalSellPost','data','totalBooks','totalcategories','totalSells','post')); 
    }
    public function report()
    {
        return view('backend.page.report'); 

    }
    public function generatereport(Request $request)
    {
        // dd($request->all());

        $validator = Validator::make($request->all(), [
            'created_at'    => 'required|date',
            'sell_to'      => 'required|date|after:created_at',
        ]);

        if($validator->fails())
        {
//            notify()->error($validator->getMessageBag());
            notify()->error('From date and to date required and to should greater then from date.');
            return redirect()->back();
        }



       $from=$request->created_at;
       $to=$request->sell_to;


//       $status=$request->status;

        $searchResult=Sellpost::whereBetween('created_at', [$from, $to])->get();
        return view('backend.page.report',compact('searchResult')); 

    }
}
