@extends('top.layouts.default')

@section('title')
新規デッキ登録
@endsection

@push('css')
<link href="/css/newdeck.css" rel="stylesheet">
@endpush

@section('content')
<h5>新規デッキ登録</h5> 
<div class="xplanation">
    ･ゲーム「shadowverse」または<a href="https://shadowverse-portal.com/deckbuilder/classes?lang=ja" target="_blank">shadowversePortal</a>のデッキコードを入力することでデッキ登録することができ、自分のデッキを公開することが出来ます。
</div>
<form method="post" action="deck_register">
{{ csrf_field() }}
<div class="deck_name">
    <h4>デッキ名(15字以内)</h4>
    @if($errors->has('deck_name')) 
        <div class="errormessage">{{ $errors->first('deck_name') }}</div> 
    @endif
    <input type="text" name="deck_name">
    <h4>デッキコード(4桁)</h4>
    <input type="text" name="deck_code" class="deck_code"  maxlength="4">
    @if($errors->has('deck_code')) 
    <div class="errormessage">{{ $errors->first('deck_code') }}</div> 
    @endif
    <h4>コメント</h4>
    @if($errors->has('deck_comment')) 
        <div class="errormessage">{{ $errors->first('deck_comment') }}</div> 
    @endif
    <textarea name="deck_comment" id="" class="comment"></textarea>
    <p><input type="submit" value="登録する" class="submit"></p>
</div>


</form>

@endsection


