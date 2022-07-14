<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class index extends Controller
{
    function index(Request $res)
    {

        if ($res->session()->has('user_id')) {
            return redirect('feed');
        }

        if ($res->save) {

            $email = $res->email;
            $pass = $res->pass;

            $count_id = DB::table('register')->where('email', $email)->where('pass', $pass);

            if ($count_id->count() == 1) {

                $user_data = $count_id->first();

                session(['user_id' => $user_data->id]);
                session(['user_fname' => $user_data->fname]);
                session(['user_lname' => $user_data->lname]);
                session(['user_image' => $user_data->image]);
                session(['user_email' => $user_data->email]);
                session(['user_city' => $user_data->city]);
                session(['user_state' => $user_data->state]);
                session(['user_followers' => $user_data->followers]);

                $update_data = array('logins' => "1");
                DB::table('register')->where('id',$user_data->id)->update($update_data);

                return redirect('feed');
            }
           
             
        }

        return view('index');
    }

    function register(Request $res)
    {

        if ($res->session()->has('user_id')) {
            return redirect('feed');
        }

        if ($res->save) {

            $image = $res->file('image');
            $get_name = $image->getClientOriginalName('$image');
            $main_image = $get_name.rand(0,999999);
            $image->move('register_user', $main_image);

            $fname = $res->fname;
            $lname = $res->lname;
            $email = $res->email;
            $mobile = $res->mobile;
            $gender = $res->gender;
            $pass = $res->pass;
            $cpass = $res->cpass;
            $country = $res->country;
            $state = $res->state;
            $city = $res->city;

            $insert_user_data = array('image' => $main_image, 'fname' => $fname, 'lname' => $lname, 'email' => $email, 'mobile' => $mobile, 'gender' => $gender, 'pass' => $pass, 'cpass' => $cpass, 'country' => $country, 'state' => $state, 'city' => $city);

            DB::table('register')->insert($insert_user_data);

            return redirect('/');
        }
        return view('register');
    }


    function logout(Request $res)
    {

        $update_data = array('logins' => "0");
        DB::table('register')->where('id',$res->session()->get('user_id'))->update($update_data);
        $res->session()->flush();
        return redirect('/');
    }

    function explore()
    {
        return view('explore');
    }
    
    function trending()
    {
        return view('trending');
    }

    function market()
    {
        return view('market');
    }

    function setting()
    {
        return view('setting');
    }
}
