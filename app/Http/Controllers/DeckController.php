<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeckController extends Controller
{
    public function index($id,$reg){
        if($reg==="R"){
            $format="ローテーション";
        }elseif($reg==="A"){
            $format="アンリミテッド";
        }
        switch($id){
            case '1':$clan="エルフ";break;
            case '2':$clan="ロイヤル";break;
            case '3':$clan="ウィッチ";break;
            case '4':$clan="ドラゴン";break;
            case '5':$clan="ネクロマンサー";break;
            case '6':$clan="ヴァンパイア";break;
            case '7':$clan="ビジョップ";break;
            case '8':$clan="ネメシス";break;
        }
        return view('deck/decklist',['clan'=>$clan,'format'=>$format]);
    }

    public function deck(){
        return view('deck/deck');
    }

    public function newdeck(){
        // デッキのハッシュ取得
        // $base_url_deckcode ='https://shadowverse-portal.com/api/v1/deck/import?format=json&deck_code=qthf';
        // $hash =file_get_contents($base_url_deckcode);
        // $hash =json_decode($hash,JSON_PRETTY_PRINT);
        // // 取得したハッシュからデッキリスト取得
        // $deckhash=$hash["data"]["hash"];
        $base_url ="https://shadowverse-portal.com/api/v1/deck?format=json&lang=ja&hash=1.7.6nnUY.6nnUY.6nnUY.6nssI.6nssI.6nssI.6hISM.6hISM.6hISM.6FUg6.6FUg6.6FUg6.6cNVo.6npwo.6npwo.6npwo.6cLYo.6cLYo.6jzLY.6jzLY.6jzLY.6k4gI.6k4gI.6k4gI.67v3q.67v3q.6Uo9I.6Uo9I.6k2EC.6nsN2.6nsN2.6nsN2.6nupS.6nupS.6nupS.6YeFI.6YeFI.6YeFI.645Pw.645Pw";
        $json =file_get_contents($base_url);
        $json =json_decode($json,JSON_PRETTY_PRINT);
        return view('deck/newdeck',compact('json'));
    }
}
