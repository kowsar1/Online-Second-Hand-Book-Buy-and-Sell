<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Sellpost;
use Carbon\Carbon;
use Illuminate\Http\Request;

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

        $startData=Carbon::createFromFormat('Y-m-d',$request->created_at);
        $endDate=Carbon::createFromFormat('Y-m-d',$request->sell_to);

        $searchResult=Sellpost::whereBetween('created_at',[$startData,$endDate])->get();
        return view('backend.page.reportganerate',compact('searchResult')); 

    }
}
