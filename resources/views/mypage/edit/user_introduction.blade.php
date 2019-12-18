@extends('top.layouts.default')

@section('title')
<?php $user=Auth::user();?>
自己紹介文変更
@endsection

@push('css')
<link href="/css/home.css" rel="stylesheet">

</head>
@endpush

@section('content')
<body>
<div class="content">
    <div class="title">自己紹介文変更</div>
    <div class="name_edit">
        <div class="nametitle">自己紹介文</div>
        <form method="post" action="user_edit">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$user->id}}">
        <input type="hidden" name="type" value="introduction">
        <textarea name="user_information" rows="4" cols="80">{{$user->introduction}}</textarea><br>
        <input type="submit" value="変更する">
        </form>
    </div>
</div>

<div class="backlink">
    <ul>
        <li><a href="/home"><プロフィールへ戻る</a></li>
        <li><a href="/home/edit"><設定一覧へ</a></li>
    </ul>
</div>
@endsection
