<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Product;
use App\Models\myCart;
use Auth;

class CartController extends Controller
{
    public function __construct(){
        $this -> middleware('auth');
    }

    public function addCart(){
        $r=request();
        $add=myCart::create([
            'productID' => $r -> id, // product id in database name
            'quantity' => $r -> quantity,
            'userID' => Auth::id(),
            'orderID' => '',
        ]);
        return redirect()->back();
    }
}
