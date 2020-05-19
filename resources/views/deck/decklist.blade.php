@extends('top.layouts.default')

@section('title')
{{$clan->class}}デッキ一覧/{{$format}}
@endsection

@push('css')
    <link href="/css/decklist.css" rel="stylesheet">
@endpush

@section('content')

<h5>{{$clan->class}}デッキ一覧/{{$format}}</h5>
<div class="serch">
    @if($errors->has('keyword')) 
        <div class="errormessage">{{ $errors->first('keyword') }}</div> 
    @endif
    <form class="top_serch" action="{{url('/search')}}">
        <input type="text" name="keyword" class="form_text" placeholder="デッキ･カード名検索">
        <input type="submit" value="デッキ検索" name="search" class="form_submit">
        <input type="submit" value="カード検索" name="search" class="form_submit">
    </form>
</div>
<p class="box"></p>

<table class="deck_list">
    <tr>
        <th width="70%">デッキ名</th>
        <th width="20%">投稿者</th>
        <th width="10%">投稿日</th>
    </tr>
@foreach($deck as $value)
    <tr>
        <td>
            <img src="/img/{{$value->class}}icon.jpg" class="deck_icon">
            <a href="/deck/{{$value->id}}">{{$value->name}}</a>
        </td>
        <td>
            <img src="/img/user_icon/{{$value->user->icon_image}}" class="user_icon">
            <a href="/user/{{$value->user->id}}">{{$value->user->name}}</a>
        </td>
        <td width=20%>{{$value->created_at->format('Y/m/d')}}</td>
    </tr>
@endforeach
</table>
@endsection