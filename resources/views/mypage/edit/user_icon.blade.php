@extends('top.layouts.default')

@section('title')
<?php $user=Auth::user();?>
アイコン画像変更
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
        <form method="post" action="image_edit" enctype="multipart/form-data">
        {{csrf_field()}}
        <!-- ↓プレビュー -->
        <!-- <span class="newicon">
            <canvas id="canvas" class="img-canvas iconimg" width="120" height="120" name="sumn"></canvas>
        </span> -->
        <input type="file" name="file" id="file">
        <input type="hidden" id="upload-image-x" name="profileImageX" value="" />
        <input type="hidden" id="upload-image-y" name="profileImageY" value="" />
        <input type="hidden" id="upload-image-w" name="profileImageW" value="" />
        <input type="hidden" id="upload-image-h" name="profileImageH" value="" />
        <input type="hidden" name="id" value="{{$user->id}}">
        <input type="hidden" name="imagetype" value="icon">
        <div id="img-container" class="preview">
            <img id="image" src="" max-height="300px">
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