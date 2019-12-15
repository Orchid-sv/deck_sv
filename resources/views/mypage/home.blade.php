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
<img class="headerimg" src="https://pbs.twimg.com/profile_banners/820806127247970304/1568932579/600x200">

<span class="icondiv"><img class="iconimg" src="https://pbs.twimg.com/profile_images/1133739727968800769/t1-8QeED_400x400.jpg"></span>
<div class="edit"><a href="/home/edit">編集する</a></div>

<div class="uname">{{$user->name}}</div>
<div class="jiko">勉強の為練習用のサイトです。もしよければ使ってみてください</div>
<h3>投稿デッキ一覧<h3>

</div>
@endsection
