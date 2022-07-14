<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class feed extends Controller
{
    function feed(Request $res)
    {
        if (!($res->session()->has('user_id'))) {
            return redirect('/');
        }

        $select_data =  DB::table('register')->whereNotIn('id', [$res->session()->get('user_id')])->get();

        $user_following = DB::table('register')->where('followers', 'LIKE', '%' . $res->session()->get('user_id') . '%');

        $following_count = $user_following->count();

        session(['following_count' => $following_count]);

        // ====================

        $user_followers = DB::table('register')->where('id', $res->session()->get('user_id'))->first();

        $followers_ids = explode(',', $user_followers->followers);


        foreach ($followers_ids as $key => $folo_ids) {
            if ($folo_ids == 0) {
                $total_followers = 0;
            } else {

                $total_followers = count($followers_ids);
            }
        }

        session(['followers_count' => $total_followers]);

        // =====================

        $img_str = "";

        if ($res->uplode) {

            session()->all();


            $user_id = session('user_id');
            $post = $res->file('post');

            foreach ($post as $ml_post) {

                $get_post = $ml_post->getClientOriginalName($ml_post);
                $main_post = rand(0, 999999) . $get_post;
                $ml_post->move('user_post', $main_post);

                $img_str = $img_str . ',' . $main_post;
            }

            $post_str = substr($img_str, 1);



            $des = $res->des;

            $insert_post = array('user_id' => $user_id, 'post' => $post_str, 'description' => $des);

            DB::table('post')->insert($insert_post);
        }


        $profile_data = DB::table('post')->orderBy('post.post_id', 'desc')->where('user_id', [$res->session()->get('user_id')])->join('register', 'post.user_id', '=', 'register.id')->select('post.*', 'register.*')->get();

        // $option = array();
        // foreach ($profile_data as $pro_ary => $value) {
        //     $post_cnt = 0;
        //     $profile = explode(',', $value->post);

        //     foreach($profile as $index => $img_name)
        //     {
        //         $option[] = $img_name;
        //     }
        // }
        //     $post_cnt = count($option);

        
        $post_cnt = 0;
        foreach ($profile_data as $pro_ary => $value) {
            $profile = explode(',', $value->post);
            $option[] = [$profile];

            $post_cnt = count($option);
        }


        session(['post_count' => $post_cnt]);



        $post_data = DB::table('post')->orderBy('post.post_id', 'desc')->join('register', 'post.user_id', '=', 'register.id')->select('post.*', 'register.*')->get();


        $select_user_arry['user_data'] = $select_data;
        $select_user_arry['user_post'] = $post_data;
        return view('feed', $select_user_arry);
    }
}
