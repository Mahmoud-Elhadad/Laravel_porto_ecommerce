<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function show_messages(){
        $messages = Message::all();
        $num_unread_ms = Message::where("view" , "0")->count();
        return view("dashboard.pages.messages" , compact("messages" , "num_unread_ms"));
    }

    public function single_message(Request $request){
        $message = Message::find($request->id);
        Message::where("id" , $request->id)->update([
            "view" => "1"
        ]);

        $unread_ms = Message::where("view" , "0")->count();

        return $message->name . "." . $message->message . "." . $unread_ms;
    }

    public function delete_ms($id){
        Message::where("id" , $id)->delete();
        return to_route("dashboard.message");
    }
}
