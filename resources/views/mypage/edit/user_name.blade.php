@extends('top.layouts.default')

@section('title')
<?php $user=Auth::user();?>
ユーザー名変更
@endsection

@push('css')
<link href="/css/home.css" rel="stylesheet">

</head>
@endpush

@section('content')
<body>
<div class="content">
    <div class="title">ユーザー名変更</div>
    <div class="name_edit">
        <div class="nametitle">ユーザー名(15文字以内)</div>
        <form method="post" action="">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$user->id}}">
        <input type="text" value="{{$user->name}}" name="user_name">
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
