<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\index;
use App\Http\Controllers\feed;
use App\Http\Controllers\follow;
use App\Http\Controllers\post;
use App\Http\Controllers\profile;
use App\Http\Controllers\chat;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::any('/',[index::class,'index']);
Route::any('/register',[index::class,'register']);
Route::any('/logout',[index::class,'logout']);


Route::any('/feed',[feed::class,'feed']);


Route::any('/folo',[follow::class,'folo']);
Route::any('/unfolo',[follow::class,'unfolo']);

Route::any('/post_uplode',[post::class,'post']);

Route::any('/explore',[index::class,'explore']);


Route::any('/chat',[chat::class,'chat']);
Route::any('/user_chat_id',[chat::class,'chat_user']);



Route::any('/trending',[index::class,'trending']);
Route::any('/market',[index::class,'market']);
Route::any('/setting',[index::class,'setting']);


Route::any('/profile',[profile::class,'profile']);


