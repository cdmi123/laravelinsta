<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class profile extends Controller
{
    function profile(Request $res)
    {

        if (!($res->session()->has('user_id'))) {
            return redirect('/');
        }

        $profile_data = DB::table('post')->orderBy('post.post_id', 'desc')->where('user_id', [$res->session()->get('user_id')])->join('register', 'post.user_id', '=', 'register.id')->select('post.*', 'register.*')->get();


      
        $profile_user_arry['profile_post'] = $profile_data;



        return view('profile', $profile_user_arry);
    }
}
