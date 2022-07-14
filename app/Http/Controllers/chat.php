<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class chat extends Controller
{
    function chat(Request $res)
    {
        if (!($res->session()->has('user_id'))) {
            return redirect('/');
        }


        $chat_data = DB::table('register')->whereNotIn('id',[$res->session()->get('user_id')])->get();

        $chats_data['chat_data'] = $chat_data;

        $id = $res->session()->get('chat_id');

        if(($res->session()->has('chat_id')))
        {
            $id = $res->session()->get('chat_id');
            $chat = DB::table('register')->where('id',$id)->first();

            $chats_data['chat'] = $chat;
        }

        $old_msg = DB::table('message_data')->where('send_id',$res->session()->get('user_id'))->where('recive_id',$id)->orwhere('recive_id',$res->session()->get('user_id'))->where('send_id',$id)->get();

        $chats_data['old_msg'] = $old_msg;

        return view('chat',$chats_data);
    }


    function chat_user(Request $res){

        $chat_user_data = DB::table('register')->where('id',$res->id)->first();
        session(['chat_id' => $chat_user_data->id]);
        $arry['chat_data'] = $chat_user_data;

        if($res->message)
        {
            $msg = array('send_id' => $res->session()->get('user_id') , 'recive_id'=> $chat_user_data->id ,'message'=>$res->message);
            DB::table('message_data')->insert($msg);

        }

        $old_msg = DB::table('message_data')->where('send_id',$res->session()->get('user_id'))->where('recive_id',$chat_user_data->id)->orwhere('recive_id',$res->session()->get('user_id'))->where('send_id',$chat_user_data->id)->get();

        $arry['old_msg'] = $old_msg;

    
       echo view('ajax_chat',$arry);

    }
}
