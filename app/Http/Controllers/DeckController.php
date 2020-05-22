<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Deck_createRequest;
use App\deck;
use App\user;
use App\deck_comment;




class DeckController extends Controller
{

    public function index($id,$reg){
        if($reg==="1"){
            $format="ローテーション";
        }elseif($reg==="0"){
            $format="アンリミテッド";
        }
        $clan=DB::table('class')->where('id',$id)->first();
        $deck = deck::with('User')->where('class',$id)->where('format',$reg)->orderBy('created_at', 'desc')->get();
        return view('deck/decklist',['clan'=>$clan,'format'=>$format,'deck'=>$deck]);
    }
    public function user_decklist($user_id){
        $clan=user::where('id',$user_id)->select('name')->first();
        $format="";
        $deck =deck::with('User')->where('user_id',$user_id)->orderBy('created_at', 'desc')->get();
        return view('deck/decklist',['clan'=>$clan,'format'=>$format,'deck'=>$deck]);
    }

    public function deck($deck_id){        
        $deck = deck::where('id',$deck_id)->first();
        $deck_user=user::where('id',$deck->user_id)->first();
        $comment=deck_comment::with('User')->where('deck_id',$deck_id)->get();
        $array_change = json_decode(json_encode($deck), true);
        $deck_list = unserialize($array_change["deck_list"]);
        $user=Auth::id();
        return view('deck/deck',['deck_list'=>$deck_list,'deck'=>$deck,'deck_user'=>$deck_user,'comment'=>$comment,'user'=>$user]);
    }
    public function comment_add(Request $request){
        deck_comment::insert([
            'user_id'=>$request->user_id,
            'deck_id'=>$request->deck_id,
            'comment'=>$request->comment,
            'created_at'=>date("Y/m/d H:i:s")
        ]);
        header("Location:/deck/{$request->deck_id}");
    }

    public function deck_Register(Deck_createRequest $request){
        $deck_code =$request->deck_code;
        $base_url_deckcode ='https://shadowverse-portal.com/api/v1/deck/import?format=json&deck_code='.$deck_code;
        $msg="";
        $hash =json_decode(file_get_contents($base_url_deckcode),JSON_PRETTY_PRINT);
        // 取得したハッシュからデッキリスト取得
            $deckhash=$hash["data"]["hash"];
            $base_url ="https://shadowverse-portal.com/api/v1/deck?format=json&lang=ja&hash=".$deckhash;
            $json =json_decode(file_get_contents($base_url),JSON_PRETTY_PRINT);

            $deck_format=1;
            $num="";
            $card_name =$card = $result= array();
            foreach ($json["data"]["deck"]["cards"] as $deck => $value){
                // ↓カード枚数含めた配列を追加する
                if(!in_array($value['card_name'],$card_name)){
                    if($num !==""){
                    $card+=array('num'=>$num);
                    array_push($result,$card);
                    $card = array();
                    }
                $card_name[] = $value['card_name'];
                // ↓カード情報を追加
                $card+=array('card_id'=>$value['card_id'],
                            'card_name'=>$value['card_name'],
                            'cost'=>$value['cost'],
                            'format_type'=>$value['format_type']);
                if($value['format_type']===0){
                    $deck_format=0;
                }
                $num=1;
                }else{
                    $num+=1;
                }
            }
            $card+=array('num'=>$num);
            array_push($result,$card);
            deck::insert([
                'user_id'=>Auth::id(),
                'deck_list'=>serialize($result),
                'class'=>$json["data"]["deck"]["clan"],
                'comment'=>$request->deck_comment,
                'name'=>$request->deck_name,
                'created_at'=>date("Y/m/d H:i:s"),
                'format'=>$deck_format
            ]);
            $deck_id = deck::insertGetId([
                'user_id'=>Auth::id(),
                'deck_list'=>serialize($result),
                'class'=>$json["data"]["deck"]["clan"],
                'comment'=>$request->deck_comment,
                'name'=>$request->deck_name,
                'created_at'=>date("Y/m/d H:i:s"),
                'format'=>$deck_format
            ]);
            header("Location:/deck/{$deck_id}");
    }

    public function newdeck(){
        return view('deck/newdeck');
    }

    public function test(){

        return view('deck/test');
    }
    

}
