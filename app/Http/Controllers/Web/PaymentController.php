<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function cash(){
        return view('web.payment.cash');
    }
    public function visa(){
        return view('web.payment.visa');
    }
}
