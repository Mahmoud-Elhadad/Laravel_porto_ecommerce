<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = Admin::all();
        return view("dashboard.pages.admins.view" , compact("admins"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.pages.admins.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdminRequest $request)
    {
        $extension = $request->img->extension();
        $tmp_name = $_FILES['img']['tmp_name'];

        $new_name = md5(uniqid()) . "." .$extension;
        move_uploaded_file($tmp_name , storage_path("app/public/images/admins/$new_name"));

        Admin::create([
            "name" => $request->name ,
            "email" => $request->email ,
            "password" => $request->password ,
            "phone" => $request->phone ,
            "gender" => $request->gender ,
            "img" => $new_name
        ]);
        return to_route("admin.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        return view("dashboard.pages.admins.edit" ,compact("admin") );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        if($request->hasFile("img")){

            unlink(storage_path("app/public/images/admins/$admin->img"));

            $extension = $request->img->extension();
            $tmp_name = $_FILES['img']['tmp_name'];

            $new_name = md5(uniqid()) . "." . $extension ;
            move_uploaded_file($tmp_name , storage_path("app/public/images/admins/$new_name"));

            Admin::where("id" , $admin->id)->update([
                "name" => $request->name ,
                "email" => $request->email ,
                "phone" => $request->phone ,
                "gender" => $request->gender ,
                "img" => $new_name ,
            ]);
        }else{
            Admin::where("id" , $admin->id)->update($request->except("_token" , "_method"));
        }
        return to_route("admin.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        unlink(storage_path("app/public/images/admins/$admin->img"));
        Admin::where("id" , $admin->id)->delete();

        return to_route("admin.index");
    }
}
