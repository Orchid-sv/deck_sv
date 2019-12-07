@extends('top.layouts.default')

@section('title')
新規デッキ登録
@endsection

@push('css')
<link href="/css/newdeck.css" rel="stylesheet">
@endpush

@section('content')
<div class="content">
<p class="test">以下の内容でデッキを登録します</p>
<table>
    <tr>
        <th class="cost">コスト</th>
        <th class="name">デッキ</th>
    </tr>
    <?php foreach($result as $date):?>
    <tr>
        <td class="cost"><?php echo $date["cost"]?></td>
        <td>
            <img src="https://shadowverse-portal.com/image/card/phase2/common/L/L_<?php echo $date["card_id"]?>.jpg?20180426b">
            <span class="text"><?php echo $date["card_name"]?></span>
            <span class="num">×<?php echo $date["num"]?></span>
        </td>
    </tr>
    <?php endforeach?>
</table>
<br>
<form action="" method="post">
{{ csrf_field() }}
デッキ名：<input type="text" name="deck_name"><br>
コメント<br><textarea name="deck_comment" id="" cols="70" rows="7"></textarea>


</form>
</div>

@endsection
