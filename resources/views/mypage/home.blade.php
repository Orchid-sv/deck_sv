@extends('top.layouts.default')

@section('title')
<?php $user=Auth::user();?>
{{$user->name}}のプロフィール
@endsection

@push('css')
<link href="/css/home.css" rel="stylesheet">
@endpush


@section('content')
<h2>マイページ</h2>
<img class="headerimg" src="img/user_header/{{$user->header_image}}">

<span class="icondiv"><img class="iconimg" src="img/user_icon/{{$user->icon_image}}"></span>
<div class="edit"><a href="/home/edit">編集する</a></div>

<div class="uname">{{$user->name}}</div>
<div class="jiko">{{$user->introduction}}</div>
<h3>投稿デッキ一覧<h3>
<div class="newdecklist">
<table>
        <tr>
            <th>デッキ名</th><th>投稿日</th>
        </tr>
        @foreach($new_deck as $new_list)
        <tr>
            <td>
                <img src="/img/{{$new_list->class}}icon.jpg" class="class_img">
                <a href="/deck/{{$new_list->id}}">{{$new_list->name}}</a>
            </td>
            <td width=20%>{{$new_list->created_at->format('Y/m/d')}}</td>
        </tr>
        @endforeach

    </table>
        </div>
@endsection