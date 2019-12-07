@extends('top.layouts.default')

@section('title')
<?php $user=Auth::user();?>
{{$user->name}}のプロフィール
@endsection


@section('content')

@endsection
