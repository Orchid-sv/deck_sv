@extends('top.layouts.default')

@section('title')
<?php $user=Auth::user();?>
{{$user->name}}のプロフィール
@endsection

@push('css')
<link href="/css/home.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.4.3/cropper.min.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.4.3/cropper.min.js"></script>
</head>
@endpush

@section('content')

<body>
<div class="content">
    <div class="title">プロフィール変更</div>
    <ul>
        <li><a href="/home/edit/user_name">ユーザー名変更</a></li>
        <li><a href="/home/edit/user_icon">アイコン画像変更</a></li>
        <li><a href="">ヘッダー画像変更</a></li>
    </ul>
    <div class="title">アカウント設定</div>
    <ul>
        <li><a href="">メールアドレス変更</a></li>
        <li><a href="">パスワード変更</a></li>
    </ul>
    <div class="title">ログアウト</div>
        <div>ログアウト</div>
    </ul>
</div>







        <!-- <form method="post" action="">
        <input type="text" value="{{$user->name}}">
        <h3>アイコン画像</h3>
        <canvas id="canvas" class="img-canvas iconimg" width="120" height="120" name="sumn"></canvas>
        <input type="file" name="file" id="file">
        <input type="hidden" id="upload-image-x" name="profileImageX" value="" />
        <input type="hidden" id="upload-image-y" name="profileImageY" value="" />
        <input type="hidden" id="upload-image-w" name="profileImageW" value="" />
        <input type="hidden" id="upload-image-h" name="profileImageH" value="" />

            <div id="img-container" class="preview">
                <img id="image" src="" width="250">
            </div>
            <h3>アイコン画像</h3>
                <canvas id="canvas" class="img-canvas iconimg" width="120" height="120" name="sumn"></canvas>
        <input type="file" name="file" id="file">
        <input type="hidden" id="upload-image-x" name="profileImageX" value="" />
        <input type="hidden" id="upload-image-y" name="profileImageY" value="" />
        <input type="hidden" id="upload-image-w" name="profileImageW" value="" />
        <input type="hidden" id="upload-image-h" name="profileImageH" value="" />

            <div id="img-container" class="preview">
                <img id="image" src="" width="250">
            </div>
            <br>
            <input type="submit" value="変更する">
        </form>
            
    </span> -->

    <script type="text/javascript" src="/js/home_edit.js"></script>
@endsection
