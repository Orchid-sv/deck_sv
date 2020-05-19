<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\deck;
use App\user;

class TopController extends Controller
{
    public function index(){
        $new_deck = deck::with('User')->limit(5)->orderBy('created_at', 'desc')->get();
        return view('top/index',['new_deck'=>$new_deck]);
    }
}
