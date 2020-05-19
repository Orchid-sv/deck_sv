<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\deck;
use App\user;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Requests\SearchRequest;

class SearchController extends Controller
{
    public function search(SearchRequest $request){
        if($request->search==="デッキ検索"){
            $result = deck::with('user')->where('name','LIKE',"%{$request->keyword}%")->get();
            return view("/deck/search_decklist",['result'=>$result,'keyword'=>$request->keyword]);
        }elseif($request->search==="カード検索"){

            $base_url_card ='https://shadowverse-portal.com/api/v1/cards?format=json&lang=ja';
            $data=json_decode(file_get_contents($base_url_card),JSON_PRETTY_PRINT);
            $data=$data['data']['cards'];
            $array=[];
            foreach($data as $value){
                if(strpos($value['card_name'],strval($request->keyword)) !==false){
                    $array[]=$value;
                }
            }
            $collect=collect($array);
            $collect=new LengthAwarePaginator(
            $collect->forPage($request->page, 20),
            count($array),
            20,
            null,
            array('path' => "/search?keyword=".$request->keyword."&search=カード検索")
        );
            return view("/card/cardlist",['data'=>$collect]);}
    }
}
