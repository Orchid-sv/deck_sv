@extends('top.layouts.default')

@section('title')
新規デッキ登録
@endsection

@push('css')
<link href="/css/newdeck.css" rel="stylesheet">
@endpush

@section('content')
<div class="content">
<p class="test">以下の内容で登録します</p>
<?php 


echo "<pre>";
print_r($result);
echo "</pre>";
?>

</div>
@endsection