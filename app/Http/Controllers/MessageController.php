<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(){
        $title = "留言板！";
        $data = [
            [
                "title"=>'測試！',
                "owner"=>"王曉明",
            ],
            [
                "title"=>"HELLO!",
                "owner"=>"哈哈名",
            ]
            ]
            ;
        return view('message.index',[
            "data" => $data,
            "title" => $title,
        ]);
    }
    public function newMessage($id){
        $title = "留言板！";
        $data = [
            (object)[
                "title"=>'測試！',
                "owner"=>"王曉明",
            ],
            (object)[
                "title"=>"HELLO!",
                "owner"=>"哈哈名",
            ]];
        return view('message.newmessage',[
            "data" => $data[$id]]);
    }
}
