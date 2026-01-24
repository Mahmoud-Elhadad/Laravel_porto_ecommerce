<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AntomiController extends Controller
{
    public function index(){
         $products = Product::with("cat", "image")->get();
         return view("ecomm.antomi.pages.index", compact("products"));
    }

    public function product_details($id){
        $product = Product::with("cat" , "image")->find($id);

        $cat_products = Product::with( "image")
                        ->where("cat_id" , $product->cat_id)
                        ->where("id" , "!=" , $product->id)
                        ->get();

        $other_products = Product::with("image")
        ->where("cat_id" , "!=" , $product->cat_id)
        ->get();

        return view("ecomm.antomi.pages.product_details" , compact("product" , "cat_products" , "other_products"));
    }
}
