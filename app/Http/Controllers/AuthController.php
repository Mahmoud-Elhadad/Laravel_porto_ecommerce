<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function show_form(){
        return view("dashboard.pages.login");
    }
    public function check(Request $request){
        if(Auth::guard("dashboard")->attempt($request->except("_token"))){
            return to_route("index");
        }else{
            return to_route("login.form")->with("message" , "Invalid login details. please try again.");
        }
    }
    public function logout(){
        Auth::guard("dashboard")->logout();
        return to_route("login.form");
    }
}
