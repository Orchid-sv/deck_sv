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
    <h5>メールアドレス</h5>
    <div class="name_edit">
        <div>新しいメールアドレス</div>
        <form method="post" action="user_edit" class="form">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$user->id}}">
        <input type="hidden" name="type" value="mail">
        @if($errors->has('user_information')) <div class="errormessage">{{ $errors->first('user_information') }}</div> @endif
        <input type="text" name="user_information" class="email_text">
        <div>新しいメールアドレス(確認用)</div>
        @if($errors->has('Verification_emaiil')) <div class="errormessage">{{ $errors->first('Verification_emaiil') }}</div> @endif
        <input type="text" name="Verification_emaiil" class="email_text"><br>
        <input type="submit" value="変更する" class="form_right_submit">
        </form>
    </div>

<div class="backlink">
    <ul>
        <li><a href="/home/edit"><設定一覧へ</a></li>
        <li><a href="/home"><プロフィールへ戻る</a></li>
    </ul>
</div>
@endsection
