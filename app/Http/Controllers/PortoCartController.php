<?php

namespace App\Http\Controllers;

use App\Models\PortoCart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PortoCartController extends Controller
{
    public function add_cart(Request $request){
        $user_id = Auth::guard('web')->user()->id;

        $cart = PortoCart::where("user_id" , $user_id)->where("product_id" , $request->product_id)->first();

        if($cart){
            $cart->increment("count");
        }else{
            PortoCart::create([
            "user_id" => $user_id ,
            "product_id" => $request->product_id
            ]);
        }

        $num_cart = PortoCart::where("user_id" , $user_id)->sum("count");
        return $num_cart;

    }

    public function remove_from_cart(Request $request){
        $user_id = Auth::guard("web")->user()->id;
        PortoCart::where("user_id" , $user_id)->where("product_id" , $request->product_id)->delete();

        $num_cart = PortoCart::where("user_id" , $user_id)->sum("count");
        return $num_cart;

        }

     public function update_count(Request $request){
        $user_id = Auth::guard("web")->user()->id;
        PortoCart::where("user_id" , $user_id)->where("product_id" , $request->product_id)->update([
            "count" => $request->count
        ]);

      $count = PortoCart::where("user_id" , $user_id)->where("product_id" , $request->product_id)->sum("count");

      $price = Product::where("id" , $request->product_id)->sum("price");

      $num_cart = PortoCart::where("user_id" , $user_id)->sum("count");


      return $count * $price.".".$num_cart;
    }

}
