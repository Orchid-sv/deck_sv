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
    <h5>自己紹介文変更</h5>
    <div class="name_edit">
        <div class="nametitle">自己紹介文</div>
        <form method="post" action="user_edit">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$user->id}}">
        <input type="hidden" name="type" value="introduction">
        @if($errors->has('user_information_introduction')) <div class="errormessage">{{ $errors->first('user_information_introduction') }}</div> @endif
        <textarea name="user_information_introduction" class="form_textarea" >{{$user->introduction}}</textarea><br>
        <input type="submit" value="変更する" class="form_right_submit">
        </form>
    </div>
<div class="backlink">
    <ul>
        <li><a href="/home/edit"><設定一覧へ</a></li>
        <li><a href=/user/{{$user->id}}><プロフィールへ戻る</a></li>
    </ul>
</div>
@endsection
