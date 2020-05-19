<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ClassTable;
use Illuminate\Pagination\LengthAwarePaginator;

class CardController extends Controller
{
    public function index($card_id){
        $base_url_card ='https://shadowverse-portal.com/api/v1/cards?format=json&lang=ja';
        $json=json_decode(file_get_contents($base_url_card),JSON_PRETTY_PRINT);
        $search = array_search($card_id, array_column($json["data"]["cards"], 'card_id'));
        $card=$json["data"]["cards"][$search];
        $card_type=DB::table("cardtype")->where('id',$card["char_type"])->first();
        $class=ClassTable::where('id',$card["clan"])->first();
        $rarity=DB::table("rarity")->where('id',$card["rarity"])->first();
        $card_set_id=DB::table("card_set_id")->where('card_set_id',$card["card_set_id"])->first();
        return view('/card/index',['card'=>$card,'class'=>$class,'card_type'=>$card_type,'rarity'=>$rarity,'card_set_id'=>$card_set_id]);
    }

    public function cardlist(Request $request,$id){
        $base_url_card ='https://shadowverse-portal.com/api/v1/cards?format=json&lang=ja&clan='.$id;
        $data=json_decode(file_get_contents($base_url_card),JSON_PRETTY_PRINT);
        $data=$data['data']['cards'];
        if($id==0){
            $array=[];
            foreach($data as $value){
                if(strpos($value['clan'],strval($id)) !==false){
                    $array[]=$value;
                }
            }
            $collect=collect($array);
        }else{
        $collect=collect($data);
        }
        $collect=new LengthAwarePaginator(
            $collect->forPage($request->page, 20),
            count($data),
            20,
            null,
            array('path' => $request->url())
        );
        return view('/card/cardlist',['data'=>$collect]);
    }
}
