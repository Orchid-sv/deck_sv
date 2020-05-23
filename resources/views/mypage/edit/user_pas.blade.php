@extends('top.layouts.default')

@section('title')
<?php $user=Auth::user();?>
パスワード変更
@endsection

@push('css')
<link href="/css/home.css" rel="stylesheet">

</head>
@endpush

@section('content')
<body>
    <h5>パスワード変更</h5>
    <div class="name_edit">
        <div>現在のパスワード</div>
        <form method="post" action="pasword_edit">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$user->id}}">
        @if($errors->has('user_oldpas')) <div class="errormessage">{{ $errors->first('user_oldpas') }}</div> @endif
        <input type="password" name="user_oldpas" class="form_name">
        <div>新しいパスワード(6文字以上)</div>
        @if($errors->has('user_newpas')) <div class="errormessage">{{ $errors->first('user_newpas') }}</div> @endif
        <input type="password" name="user_newpas" class="form_name">
        <div>新しいパスワード(確認用)</div>
        @if($errors->has('user_Verificationpas')) <div class="errormessage">{{ $errors->first('user_Verificationpas') }}</div> @endif
        <input type="password" name="user_Verificationpas" class="form_name"><br>
        <input type="submit" value="変更する" class="name_submit">
        </form>
    </div>
<div class="backlink">
    <ul>
        <li><a href="/home/edit"><設定一覧へ</a></li>
        <li><a href=/user/{{$user->id}}><プロフィールへ戻る</a></li>
    </ul>
</div>
@endsection
