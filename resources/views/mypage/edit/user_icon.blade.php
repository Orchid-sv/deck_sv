@extends('top.layouts.default')

@section('title')
<?php $user=Auth::user();?>
ユーザー名変更
@endsection

@push('css')
<link href="/css/home.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.4.3/cropper.min.css" rel="stylesheet" type="text/css" media="all"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.4.3/cropper.min.js"></script>



</head>
@endpush

@section('content')
<body>
<div class="content">
    <div class="title">アイコン変更</div>
    <div class="name_edit">
        <div class="preview_nowicon"><img class="nowicon" src="https://pbs.twimg.com/profile_images/1133739727968800769/t1-8QeED_400x400.jpg"></div>
        <form method="post" action="" enctype="multipart/form-data">
        {{csrf_field()}}
        <span class="newicon">
            <canvas id="canvas" class="img-canvas iconimg" width="120" height="120" name="sumn"></canvas>
        </span>
        <input type="file" name="file" id="file">
        <input type="hidden" id="upload-image-x" name="profileImageX" value="" />
        <input type="hidden" id="upload-image-y" name="profileImageY" value="" />
        <input type="hidden" id="upload-image-w" name="profileImageW" value="" />
        <input type="hidden" id="upload-image-h" name="profileImageH" value="" />
        <div id="img-container" class="preview">
            <img id="image" src="" width="400">
        </div>
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
<script type="text/javascript" src="/js/home_edit.js"></script>
@endsection