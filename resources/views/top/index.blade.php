@extends('top.layouts.default')

@section('title','TOPページ')

@push('css')
    <link href="/css/top.css" rel="stylesheet">
@endpush

@section('content')
<div class="serch">
    @if($errors->has('keyword')) 
        <div class="errormessage">{{ $errors->first('keyword') }}</div> 
    @endif
    <form class="top_serch" action="{{url('/search')}}">
        <input type="text" name="keyword" class="form_text" placeholder="デッキ･カード名検索">
        <input type="submit" value="デッキ検索" name="search" class="form_submit">
        <input type="submit" value="カード検索" name="search" class="form_submit">
    </form>
</div>
<h5>shadowverse デッキ検索</h5>
<img src="/img/ogp.jpg" class="topimg">
<div class="Explanation">
    このサイトではshadowverseのカードリスト、デッキレシピの公開をしています、デッキ作成の参考にしてみてください！<br>

    @if(!Auth::check())
    <div>また
            <a href="/login"><button type="button" class="mypage_login_button">ログイン</button></a>
            <a href="/register"><button type="button" class="mypage_login_button">新規登録</button></a>
            するとデッキレシピの投稿やコメントすることが出来ます！
        </div>
    @endif

</div>
<div class="newdecklist">
<h6>新規投稿デッキ</h6>
<table>
    <tr>
        <th width="70%">デッキ名</th><th width="20%">投稿者</th><th width="10$">投稿日</th>
    </tr>
    @foreach($new_deck as $new_list)
    <tr>
        <td>
            <img src="/img/{{$new_list->class}}icon.jpg" class="class_img">
            <a href="/deck/{{$new_list->id}}">{{$new_list->name}}</a>
        </td>
        <td>
            <img src="/img/user_icon/{{$new_list->user->icon_image}}" class="user_img"><a href="/user/{{$new_list->user->id}}">{{$new_list->user->name}}</a>
        </td>
        <td width=20%>{{$new_list->created_at->format('Y/m/d')}}</td>
    </tr>
    @endforeach
</table>
</div>



<p class="box"></p>
<div class="roration">
<h6>ローテーションデッキ</h6>
<table class="class_decllist">
    <tr>
        <td><a href="/decklist/1/1"><img src="/img/1icon.jpg" class="class_topimg"><p>エルフ</p></a></td>
        <td><a href="/decklist/2/1"><img src="/img/2icon.jpg" class="class_topimg"><p>ロイヤル</p></a></td>
        <td><a href="/decklist/3/1"><img src="/img/3icon.jpg" class="class_topimg"><p>ウィッチ</p></a></td>
        <td><a href="/decklist/4/1"><img src="/img/4icon.jpg" class="class_topimg"><p>ドラゴン</p></a></td>
        <td><a href="/decklist/5/1"><img src="/img/5icon.jpg" class="class_topimg"><p>ネクロ</p></a></td>
        <td><a href="/decklist/6/1"><img src="/img/6icon.jpg" class="class_topimg"><p>ヴァンプ</p></a></td>
        <td><a href="/decklist/7/1"><img src="/img/7icon.jpg" class="class_topimg"><p>ビジョップ</p></a></td>
        <td><a href="/decklist/8/1"><img src="/img/8icon.jpg" class="class_topimg"><p>ネメシス</p></a></td>
    </tr>
</table>
</div>

<div class="roration">
<h6>アンリミテッドデッキ</h6>
<table class="class_decllist">
<tr>
        <td><a href="/decklist/1/0"><img src="/img/1icon.jpg" class="class_topimg"><p>エルフ</p></a></td>
        <td><a href="/decklist/2/0"><img src="/img/2icon.jpg" class="class_topimg"><p>ロイヤル</p></a></td>
        <td><a href="/decklist/3/0"><img src="/img/3icon.jpg" class="class_topimg"><p>ウィッチ</p></a></td>
        <td><a href="/decklist/4/0"><img src="/img/4icon.jpg" class="class_topimg"><p>ドラゴン</p></a></td>
        <td><a href="/decklist/5/0"><img src="/img/5icon.jpg" class="class_topimg"><p>ネクロ</p></a></td>
        <td><a href="/decklist/6/0"><img src="/img/6icon.jpg" class="class_topimg"><p>ヴァンプ</p></a></td>
        <td><a href="/decklist/7/0"><img src="/img/7icon.jpg" class="class_topimg"><p>ビジョップ</p></a></td>
        <td><a href="/decklist/8/0"><img src="/img/8icon.jpg" class="class_topimg"><p>ネメシス</p></a></td>
    </tr>
</table>
</div>

<div class="clearfix"></div>
<p class="box"></p>


@endsection