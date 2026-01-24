<?php

use App\Http\Controllers\AntomiController;
use App\Http\Controllers\AuthUserController;
use App\Http\Controllers\PortoCartController;
use App\Http\Controllers\PortoController;
use App\Http\Controllers\PortoWishlistController;
use Illuminate\Support\Facades\Route;


Route::get("/" , [PortoController::class , "index"])->name("porto.index");
Route::get('details/{id}' , [PortoController::class , "product_details"])->name("porto.product.details");

Route::get("porto/blog" , [PortoController::class , "blog"])->name("porto.blog");
Route::get("porto/about" , [PortoController::class , "about"])->name("porto.about");
Route::get("porto/cart" , [PortoController::class , "cart_page"])->name("porto.cartPage");
Route::get("porto/wishlist" , [PortoController::class , "wishlist"])->name("porto.wishlistPage");

Route::get('showMs' , [PortoController::class , "show_ms"])->name("porto.message");
Route::post('storeMs' , [PortoController::class , "store_ms"])->name("porto.message.store");


Route::get("portoRegister" , [AuthUserController::class , "show_register_user_form"])->name("porto.register");
Route::post("portoAddUser" , [AuthUserController::class , "add_user"])->name("porto.user.add");



Route::get("portoLogin" , [AuthUserController::class , "show_login_user_form"])->name("porto.login");
Route::post("portoLoginCheck" , [AuthUserController::class , "login_user_check"])->name("porto.login.check");
Route::get("portoLogout" , [AuthUserController::class , "user_logout"])->name("porto.logout");

Route::post("cart" , [PortoCartController::class , "add_cart"])->name("porto.add.cart");
Route::post("remove_from_cart" , [PortoCartController::class , "remove_from_cart"])->name("porto.remove.cart");
Route::post("update_count" , [PortoCartController::class , "update_count"])->name("porto.updateCount.cart");

Route::post("wishlst" , [PortoWishlistController::class , "add_to_wishlist"])->name("porto.add.wishlist");
// -----------------------------------------------------------------------------------



Route::prefix("antomi")->group(function(){


    Route::get("index" , [AntomiController::class , "index"])->name("antomi.index");
    Route::get("antomi_product_details/{id}" , [AntomiController::class , "product_details"])->name("antomi.product.details");

});
