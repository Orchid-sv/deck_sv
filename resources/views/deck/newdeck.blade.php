@extends('top.layouts.default')

@section('title')
新規デッキ登録
@endsection

@push('css')
<link href="/css/newdeck.css" rel="stylesheet">
@endpush

@section('content')
<div class="content">
<p class="test">以下の内容で登録します</p>
<?php 

$array_tmp = $array_result = array();
foreach ($json["data"]["deck"]["cards"] as $num => $value){
    if(!in_array($value['card_name'],$array_tmp)){
        $array_tmp[] = $value['card_name'];
        $array_result[] = $value;
    }
}


foreach($array_result["data"]["deck"]["cards"] as $date){
    $link="https://shadowverse-portal.com/image/card/phase2/common/L/L_".$date["card_id"].".jpg?20180426b=&lang=ja";
    echo $date["card_name"]."<br>";
    echo '<img src="'.$link.'>"';
    echo "<br>";

}
?>

</div>
@endsection

