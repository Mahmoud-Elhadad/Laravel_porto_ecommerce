<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use App\Models\Message;
use App\Models\PortoCart;
use App\Models\PortoWishlist;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PortoController extends Controller
{
    public function index(){
        $products = Product::with("cat" , "image")->paginate(3);
        return view("ecomm.porto.pages.index" , compact("products"));


    }

    public function blog() {
        return view("ecomm.porto.pages.blog");
    }
    public function about() {
        return view("ecomm.porto.pages.about");
    }
    public function wishlist() {
        if(Auth::guard("web")->check()){
             $user_id = Auth::guard('web')->user()->id;
             $wishlists = PortoWishlist::where("user_id" , $user_id)->with("product.image")->get();
        }
        return view("ecomm.porto.pages.wishlist" , compact("wishlists"));
    }

    public function cart_page(){
        if(Auth::guard("web")->check()){
            $user_id = Auth::guard('web')->user()->id;
            $carts = PortoCart::where("user_id" , $user_id)->with("product.image")->get();
        }
        return view("ecomm.porto.pages.cart" , compact("carts"));
    }

    public function product_details($id){
        $product = Product::with("cat" , "image")->find($id);

         $cat = Cat::find($product->cat_id , "name");

        $products_cat = Product::with("image" )
        ->where("cat_id" , $product->cat_id)
        ->where("id" , "!=" , $product->id)
        ->get();


        return view("ecomm.porto.pages.product_details" , compact("product" , "cat" ,  "products_cat"));
    }

    public function show_ms(){
        return view("ecomm.porto.pages.contact");
    }

    public function store_ms(Request $request) {
        Message::create($request->except("_token"));

        return "<div class ='alert alert-success'>Your message sent successfully</div>";
    }


}
