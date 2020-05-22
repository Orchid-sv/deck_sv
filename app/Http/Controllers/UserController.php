<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\deck;
use App\user;
use App\user_comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CommentRequest;

class UserController extends Controller
{
    public function index($user_id){
        $deck = deck::where('user_id',$user_id)->count();
        $myuser=NULL;
        $user=user::where('id',$user_id)->first();
        $myuser=Auth::id();
        $comment=user_comment::with('User')->where('home_user_id',$user_id)->get();

        return view('mypage/user_page',['deck'=>$deck,'user'=>$user,'myuser'=>$myuser,'comment'=>$comment]);
    }

    public function user_comment_add(CommentRequest $request){
        user_comment::insert([
            'user_id'=>$request->user_id,
            'home_user_id'=>$request->home_user_id,
            'comment'=>$request->comment,
            'created_at'=>date("Y/m/d H:i:s")
        ]);
        
        header("Location:/user/{$request->home_user_id}");
    }
}
