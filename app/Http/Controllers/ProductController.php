<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Cat;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with("image" , "cat")->get();
        return view("dashboard.pages.products.view" , compact("products") );
    }

    /**
     * Show the form for creating a new resource.
    */
    public function create()
    {

        $cats = Cat::all();

        return view("dashboard.pages.products.add" , compact("cats"));
    }

    /**
     * Store a newly created resource in storage.
    */
    public function store(ProductRequest $request)
    {
        $product = $request->except("_token" , "img");
        $img = $request->only("img");

        $data = Product::create($product);

        Image::saveImg($img , $data->id);

        return to_route("product.index");
    }

    /**
     * Display the specified resource.
    */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
    */
    public function edit(Product $product)
    {

        $cats = Cat::all();

        return view("dashboard.pages.products.edit" , compact("cats" , "product"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        if($request->hasFile("img")){
            $img = $request->only("img");

            Product::where("id" , $product->id)->update($request->except("_token" , "_method" , "img"));
            Image::deleteImage($product->id);
            Image::saveImg($img , $product->id);
        }else{
            Product::where("id" , $product->id)->update($request->except("_token" , "_method"));
        }
        return to_route("product.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        Image::deleteImage($product->id);
        Product::where("id" , $product->id)->delete();
        return to_route("product.index");
    }
}
