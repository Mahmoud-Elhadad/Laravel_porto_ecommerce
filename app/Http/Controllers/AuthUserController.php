<?php

namespace App\Http\Controllers;

use App\Http\Requests\PortoUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthUserController extends Controller
{
    public function show_register_user_form(){
        return view("ecomm.porto.pages.register");
    }

    public function add_user(PortoUserRequest $request){
        User::create($request->except("_token"));
        return to_route("porto.login");
    }

    public function show_login_user_form(){
        return view("ecomm.porto.pages.login");
    }
    public function login_user_check(Request $request){
       $request->validate([
        "email" => "required|email|exists:users,email" ,
        "password" => "required|min:6"
       ]);

       if(Auth::guard("web")->attempt($request->except("_token")))
        return to_route(("porto.index"));
       else
        return to_route("porto.login")->with("message_login" , "Invalid email or password");
    }

    public function user_logout(){
        Auth::guard("web")->logout();

        return to_route("porto.login");
    }


}
