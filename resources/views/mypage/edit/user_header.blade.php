@extends('top.layouts.default')

@section('title')
<?php $user=Auth::user();?>
ヘッダー画像変更
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
    <h5 id="imagetype">ヘッダー画像変更</h5>
    <div class="name_edit">
        @if($errors->has('file')) 
            <div class="errormessage">{{ $errors->first('file') }}</div> 
        @endif
        <form method="post" action="image_edit" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="file" name="file" id="file">
        <input type="hidden" id="upload-image-x" name="profileImageX" value="" />
        <input type="hidden" id="upload-image-y" name="profileImageY" value="" />
        <input type="hidden" id="upload-image-w" name="profileImageW" value="" />
        <input type="hidden" id="upload-image-h" name="profileImageH" value="" />
        <input type="hidden" name="id" value="{{$user->id}}">
        <input type="hidden" name="imagetype" value="header">
        <div id="img-container" class="preview">
            <img id="image" src="">
        </div>
        <input type="submit" value="変更する">
        </form>
    </div>

<div class="backlink">
    <ul>
        <li><a href="/home/edit"><設定一覧へ</a></li>
        <li><a href=/user/{{$user->id}}><プロフィールへ戻る</a></li>
    </ul>
</div>
<script type="text/javascript" src="/js/home_edit.js"></script>
@endsection