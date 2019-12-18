@extends('top.layouts.default')

@section('title')
<?php $user=Auth::user();?>
{{$user->name}}のプロフィール
@endsection

@push('css')
<link href="/css/home.css" rel="stylesheet">
@endpush


@section('content')
<div class="content">
<h2>マイページ</h2>
<img class="headerimg" src="img/user_header/{{$user->header_image}}">

<span class="icondiv"><img class="iconimg" src="img/user_icon/{{$user->icon_image}}"></span>
<div class="edit"><a href="/home/edit">編集する</a></div>

<div class="uname">{{$user->name}}</div>
<div class="jiko">{{$user->introduction}}</div>
<h3>投稿デッキ一覧<h3>

</div>
@endsection
