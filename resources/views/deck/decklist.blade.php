@extends('top.layouts.default')

@section('title')
{{$clan}}デッキ一覧/{{$format}}
@endsection

@push('css')
    <link href="/css/decklist.css" rel="stylesheet">
@endpush

@section('content')

<h3>{{$clan}}デッキ一覧/{{$format}}</h3>

<div class="new"><a href="../../newdeck">新規デッキ投稿</a></div>
<table class="decktable">
    <tr>
        <th>デッキ名</th>
        <th>デッキタイプ</th>
        <th>コメント</th>
        <th>最終更新日</th>
    </tr>
    <tr>
        <td><a href="../../deck">アグロエルフ</a></td>
        <td>アグロ</td>
        <td>強いです</td>
        <td>2019/11/25</th>
    </tr>
    <tr>
        <td><a href="">アグロエルフ</a></td>
        <td>アグロ</td>
        <td>強いです</td>
        <td>2019/11/25</th>
    </tr>
    <tr>
        <td><a href="">アグロエルフ</a></td>
        <td>アグロ</td>
        <td>強いです</td>
        <td>2019/11/25</th>
    </tr>
    <tr>
        <td><a href="">アグロエルフ</a></td>
        <td>アグロ</td>
        <td>強いです</td>
        <td>2019/11/25</th>
    </tr>
    <tr>
        <td><a href="">アグロエルフ</a></td>
        <td>アグロ</td>
        <td>強いです</td>
        <td>2019/11/25</th>
    </tr>
</table>
@endsection