@extends('top.layouts.default')

@section('title')
<?php $user=Auth::user();?>
{{$user->name}}のプロフィール
@endsection

@push('css')
<link href="/css/home.css" rel="stylesheet">
</head>
@endpush

@section('content')

<body>
    <h5>プロフィール変更</h5>
    <div class="edit_list">
    <ul>
        <li><a href="/home/edit/user_name">ユーザー名変更</a></li>
        <li><a href="/home/edit/user_icon">アイコン画像変更</a></li>
        <li><a href="/home/edit/user_header">ヘッダー画像変更</a></li>
        <li><a href="/home/edit/user_introduction">プロフィール編集</a></li>
    </ul>
    <h5>アカウント設定</h5>
    <ul>
        <li><a href="/home/edit/user_email">メールアドレス変更</a></li>
        <li><a href="/home/edit/user_pas">パスワード変更</a></li>
    </ul>
    <h5>ログアウト</h5>
    <ul>
        <li><a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        ログアウト
    </li>
    </ul>
</div>
</body>

@endsection
