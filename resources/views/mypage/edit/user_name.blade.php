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
    <h5>ユーザー名変更</h5>
    <div class="name_edit">
        <div class="nametitle">ユーザー名(15文字以内)</div>
        <form method="post" action="user_edit">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$user->id}}">
        <input type="hidden" name="type" value="name">
        @if($errors->has('user_information_name')) <div class="errormessage">{{ $errors->first('user_information_name') }}</div> @endif
        <input type="text" value="{{$user->name}}" name="user_information_name" class="form_name">
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
