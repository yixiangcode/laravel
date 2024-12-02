<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function add(){
        $r = request(); // get all data from html input
        $addProduct = Product::create([
            'name' => $r -> productName, // name in database name
            'description' => $r -> productDescription,
            'quantity' => $r -> productQuantity,
            'price' => $r -> productPrice,
            'categoryID' => '1',
            'image' => 'empty.jpg',
        ]);
        //return view("addProduct");
        return redirect()->route('showProduct');
    }

    public function show(){
        $viewProduct = Product::all(); // SQL select * from products
        return view('showProduct')->with('products', $viewProduct); // products is variable name
    }

    public function edit($id){
        $products=Product::all()->where('id',$id);
        //select * from products where id='$id';
        return view('editProduct')->with('products', $products); // products is variable name, product is array
    }

    public function update(){
        $r=request(); // retrieve data from html input
        $product=Product::find($r->id); // find record based on primary key, make sure consistency
        $product->name=$r->productName;
        $product->description=$r->productDescription;
        $product->price=$r->productPrice;
        $product->quantity=$r->productQuantity;
        $product->save(); // update products set name = '$productname', price='$ProductPrice'.... where id='$id'
        return redirect()->route('showProduct');
    }
}
