<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class follow extends Controller
{
    function folo(Request $res){

       

        $user_data = DB::table('register')->where('id',$res->id)->first();

        $folo_id = $user_data->followers;

       

        if($folo_id == 0){

            $folo_id = $res->session()->get('user_id');

        }else{

            $folo_id = $folo_id.','.$res->session()->get('user_id');

        }

       

        $edit_id = array('followers'=>$folo_id);

        DB::table('register')->where('id',$res->id)->update($edit_id);

        

        $new_user_data = DB::table('register')->whereNotIn('id',[$res->session()->get('user_id')])->get();

        $new_arry['user_data'] = $new_user_data;

        echo view('folo_edit',$new_arry);

    }



    function unfolo(Request $res){

        $user_data = DB::table('register')->where('id',$res->id)->first();

        $unfolo_id = explode(',',$user_data->followers);

        if(($key = array_search($res->session()->get('user_id'),$unfolo_id)) !== false){
            unset($unfolo_id[$key]);
        }

        $unfolo_id = implode(',',$unfolo_id);

        

        if($unfolo_id == ""){

            $unfolo_id = 0;
        }


   

        $edit_my_id = array('followers'=>$unfolo_id);
        DB::table('register')->where('id',$res->id)->update($edit_my_id);





        $new_user_data = DB::table('register')->whereNotIn('id',[$res->session()->get('user_id')])->get();

        $new_arry['user_data'] = $new_user_data;

        echo view('folo_edit',$new_arry);
    }
}
