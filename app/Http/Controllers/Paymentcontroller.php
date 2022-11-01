<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Paymentcontroller extends Controller
{
    public function payment()
    {
        return view('backend.page.payment');
    }
}
