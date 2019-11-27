@extends('top.layouts.default')

@section('title')
新規デッキ登録
@endsection

@push('css')
<link href="/css/newdeck.css" rel="stylesheet">
@endpush

@section('content')
<div content>
<?php foreach($json["data"]["deck"]["cards"] as $date){
    $link="https://shadowverse-portal.com/image/card/phase2/common/L/L_".$date["card_id"].".jpg?20180426b=&lang=ja";
    echo $date["card_name"]."<br>";
    echo '<img src="'.$link.'>"';
    echo "<br>";

}?>

</div>
@endsection

