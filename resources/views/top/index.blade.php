@extends('top.layouts.default')

@section('title','TOPページ')

@push('css')
    <link href="/css/top.css" rel="stylesheet">
@endpush

@section('content')

<div class="Description">このサイトではshadowverseのデッキコードを使って自分のデッキレシピの共有が出来ます。お気に入りのデッキなどを公開たりデッキ作成の参考に利用してください。</div>
<!-- デッキページへのリンク -->
<h3>ローテーションデッキ一覧</h3>
<div class="decktable">
<table>
    <tr>
        <td><a href="decklist/1/R"><img class="deck" src="/img/elf.png"><br>エルフデッキ一覧</a></td>
        <td><a href="decklist/2/R"><img class="deck" src="/img/ri.png"><br>ロイヤルデッキ一覧</a></td>
        <td><a href="decklist/3/R"><img class="deck" src="/img/ulitti.png"><br>ウィッチデッキ一覧</a></td>
    </tr>
    <tr>
        <td><a href="decklist/4/R"><img class="deck" src="/img/dora.png"><br>ドラゴンデッキ一覧</a></td>
        <td><a href="decklist/5/R"><img class="deck" src="/img/neku.png"><br>ネクロマンサーデッキ一覧</a></td>
        <td><a href="decklist/6/R"><img class="deck" src="/img/v.png"><br>ヴァンパイアデッキ一覧</a></td>
    </tr>
    <tr>
        <td><a href="decklist/7/R"><img class="deck" src="/img/bijo.png"><br>ビジョップデッキ一覧</a></td>
        <td><a href="decklist/8/R"><img class="deck" src="/img/neme.png"><br>ネメシスデッキ一覧</a></td>
        <td>-</td>
    </tr>
</table>
</div>

<h3 class="test">アンリミテッドデッキ一覧</h3>
<div class="decktable">
<table>
    <tr>
        <td><a href=""><img class="deck" src="/img/elf.png"><br>エルフデッキ一覧</a></td>
        <td><a href=""><img class="deck" src="/img/ri.png"><br>ロイヤルデッキ一覧</a></td>
        <td><a href=""><img class="deck" src="/img/ulitti.png"><br>ウィッチデッキ一覧</a></td>
    </tr>
    <tr>
        <td><a href=""><img class="deck" src="/img/dora.png"><br>ドラゴンデッキ一覧</a></td>
        <td><a href=""><img class="deck" src="/img/neku.png"><br>ネクロマンサーデッキ一覧</a></td>
        <td><a href=""><img class="deck" src="/img/v.png"><br>ヴァンパイアデッキ一覧</a></td>
    </tr>
    <tr>
        <td><a href=""><img class="deck" src="/img/bijo.png"><br>ビジョップデッキ一覧</a></td>
        <td><a href=""><img class="deck" src="/img/neme.png"><br>ネメシスデッキ一覧</a></td>
        <td>-</td>
    </tr>
</table>
</div>

<h3>カード一覧</h3>
<div class="decktable">
<table>
    <tr>
        <td><a href=""><img class="deck" src="/img/elf.png"><br>エルフデッキ一覧</a></td>
        <td><a href=""><img class="deck" src="/img/ri.png"><br>ロイヤルデッキ一覧</a></td>
        <td><a href=""><img class="deck" src="/img/ulitti.png"><br>ウィッチデッキ一覧</a></td>
    </tr>
    <tr>
        <td><a href=""><img class="deck" src="/img/dora.png"><br>ドラゴンデッキ一覧</a></td>
        <td><a href=""><img class="deck" src="/img/neku.png"><br>ネクロマンサーデッキ一覧</a></td>
        <td><a href=""><img class="deck" src="/img/v.png"><br>ヴァンパイアデッキ一覧</a></td>
    </tr>
    <tr>
        <td><a href=""><img class="deck" src="/img/bijo.png"><br>ビジョップデッキ一覧</a></td>
        <td><a href=""><img class="deck" src="/img/neme.png"><br>ネメシスデッキ一覧</a></td>
        <td>-</td>
    </tr>
</table>
</div>

@endsection