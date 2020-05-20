@extends('top.layouts.default')

@section('title')
{{$user->name}}のプロフィール
@endsection

@push('css')
<link href="/css/home.css" rel="stylesheet">
@endpush


@section('content')
<img class="headerimg" src="/img/user_header{{$user->header_image}}">

<span class="icondiv"><img class="iconimg" src="/img/user_icon/{{$user->icon_image}}"></span>
@if(isset($myuser))
    @if($myuser==$user->id)
    <div class="edit"><button type="button" class="mypage_login_button"><a href="/home/edit">編集する</a></button></div>
    @endif
@endif

<div class="uname">{{$user->name}}</div>
<p class="box"></p>
<h4>ユーザー情報<h4>
<table class="user_information">
    <tr>
        <th>自己紹介</th>
        <td>{!! nl2br($user->introduction) !!}</td>
    </tr>
    <tr>
        <th>デッキ投稿数</th>
        <td>{{$deck}}&nbsp;<a href="/user_decklist/{{$user->id}}">({{$user->name}}投稿デッキ一覧)</a></td>
    </tr>
    <tr>
        <th>最終ログイン</th>
        @if(!isset($user->last_login))
            <td>{{$user->created_at->format('Y年m月d日 h時i分')}}</td>
        @else
        <td>{{$user->last_login_at->format('Y年m月d日 h時i分')}}</td>
        @endif
    </tr>
</table>
<h4>個人掲示板</h4>
<p class="box"></p>
<div class="board">
    @if(Auth::check())
        <form method="post" action="/user_comment_add">
            {{ csrf_field() }}
            <input type="hidden" name="user_id" value="{{$myuser}}">
            <input type="hidden" name="home_user_id" value="{{$user->id}}">
            <p class="textarea"><textarea name="comment" class="board_form" placeholder="最大200字までコメントできます"></textarea></p>
            @if($errors->has('comment')) 
                <div class="errormessage">{{ $errors->first('comment') }}</div> 
            @endif
            <p class="submit"><input type="submit" value="コメントする" clas="bord_submit"></p>
        </form>
    @else
        <div>
            <a href="/login"><button type="button" class="mypage_login_button">ログイン</button></a>
            <a href="/register"><button type="button" class="mypage_login_button">新規登録</button></a>
            するとコメントすることが出来ます
        </div>
    @endif
    <div class="comment_list">
        @foreach($comment as $value)
            <a href='/user/{{$value->user->id}}'><img class="deckmy_icon" src="/img/user_icon/{{$value->user->icon_image}}">&nbsp{{$value->user->name}}</a>
            <p class="comment_date">{{$value->created_at}}</p>
            <p class="comment">{{$value->comment}}</p>
        <p class="coment_box"></p>
        @endforeach
    </div>
</div>

@endsection