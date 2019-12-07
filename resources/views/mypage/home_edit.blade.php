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
        <div class="container">
        <form method="get" action="">
        <input type="file" name="file" id="file">
        <input type="hidden" id="upload-image-x" name="profileImageX" value="0" />
        <input type="hidden" id="upload-image-y" name="profileImageY" value="0" />
        <input type="hidden" id="upload-image-w" name="profileImageW" value="0" />
        <input type="hidden" id="upload-image-h" name="profileImageH" value="0" />

            <div id="img-container">
                <img id="image" src="" width="250">
            </div>
            <input type="submit" value="これにする">
        </form>
            <!-- <h3>プレビュー</h3>
                <canvas id="canvas" class="img-canvas" width="450" height="150" name="sumn"></canvas>
        </div> -->

    <script type="text/javascript" src="/js/home_edit.js"></script>
@endsection
