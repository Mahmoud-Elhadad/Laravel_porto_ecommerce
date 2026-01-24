<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CatController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\AuthAdmin;
use App\Http\Middleware\ExistAdmin;
use Illuminate\Support\Facades\Route;

    Route::middleware(AuthAdmin::class)->group(function(){
        Route::get("index" , function(){
            return view("dashboard.pages.index");
        })->name("index");

        Route::resource('admin', AdminController::class);
        Route::resource('cat', CatController::class);
        Route::resource('product', ProductController::class);


        Route::get("message" , [MessageController::class , "show_messages"])->name("dashboard.message");
        Route::post("singleMs" , [MessageController::class , "single_message"])->name("dashboard.single.message");
        Route::delete("deleteMs/{id}" , [MessageController::class , "delete_ms"])->name("dashboard.delete.message");
    });



    Route::get("login" , [AuthController::class , "show_form"])->name("login.form")->middleware(ExistAdmin::class);
    Route::post("check" , [AuthController::class , "check"])->name("login.check");
    Route::get("logout" , [AuthController::class , "logout"])->name("logout");
?>
