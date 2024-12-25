<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe;

class PaymentController extends Controller
{
    public function paymentPost(Request $request)
    {       
	Stripe\Stripe::setApiKey(env('sk_test_51QXBvGKyJnPHGD3gkefWguEIPVh7IC6ZhtV7h3IeKGscO7cMqz6xBlu68TcRy9loHvby27mxnMOBBNuLLffSoQpt00U2vMiYhZ'));
        Stripe\Charge::create ([
                "amount" => $request->sub*100,   // RM10  10=10 cen 10*100=1000 cen
                "currency" => "MYR",
                "source" => $request->stripeToken,
                "description" => "This payment is testing purpose of southern online",
        ]);
           
        return back();
    }

}
