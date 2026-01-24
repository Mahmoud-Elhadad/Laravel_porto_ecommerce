<?php

namespace App\Http\Controllers;

use App\Models\PortoWishlist;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PortoWishlistController extends Controller
{
     public function add_to_wishlist(Request $request){
        $user_id = Auth::guard("web")->user()->id;
        $product_id = $request->product_id;

        $is_exist = PortoWishlist::where("user_id" , $user_id )->where("product_id" , $product_id)->pluck("is_exist");

        if( sizeof($is_exist) != 0 && $is_exist[0] == 'false'){
            PortoWishlist::where("user_id" , $user_id)->where("product_id" , $product_id)->delete();
            return '<i class="icon-heart"></i>';
        }else{
            $num = Product::where("id" , $product_id)->pluck("count");
            $stock = $num[0] > 0 ? "1" : "0";
            PortoWishlist::create([
                "user_id" => $user_id ,
                "product_id" => $product_id ,
                "stock" => $stock
            ]);
            return '<i class="fas fa-heart" style="color: red;"></i>';
        }




    }




}
