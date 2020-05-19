<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @stack('css')
    <link href="/css/nav.css" rel="stylesheet" media="screen">
</head>
<body>
    <!-- header部分 -->

	<nav class="top_nav">
        <div class="header flex">
            <div class="logo"><a href="/">shadowverse デッキ一覧</a></div>
            <div class="right_menu">
            <div class="flex">
            @if(Auth::check())
            <?php $user=Auth::user();?>
            <div class="header_right">
            <ul>
                <li><img class="my_icon" src="/img/user_icon/{{$user->icon_image}}"></li>
                <li class="user_name"><a href="/user/{{$user->id}}">{{$user->name}}</a></li>
                <li><a href="/newdeck"><button type="button">新規デッキ投稿</button></a></li>
                <li>
                <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                    <button type="button">ログアウト</button>
                </a>
                </li>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                </ul>
                </div>
            @else
            <div class="header_right">
                <ul>
                <li><a href="/login"><button type="button">ログイン</button></a></li>
                <li><a href="/register"><button type="button">新規登録</button></a></li>
                </ul>
            </div>
            @endif
        </div>
        </div>
    </nav>

<!-- サイドメニュー -->
<div class="menu">
    <div>
        <h3>ローテーションデッキ一覧</h3>
        <ul>
            <li><a href="/decklist/1/1">エルフ</a></li>
            <li><a href="/decklist/2/1">ロイヤル</a></li>
            <li><a href="/decklist/3/1">ウィッチ</a></li>
            <li><a href="/decklist/4/1">ドラゴン</a></li>
            <li><a href="/decklist/5/1">ネクロマンサー</a></li>
            <li><a href="/decklist/6/1">ヴァンパイア</a></li>
            <li><a href="/decklist/7/1">ビジョップ</a></li>
            <li><a href="/decklist/8/1">ネメシス</a></li>
        </ul>
        <h3>アンリミテッドデッキ一覧</h3>
        <ul>
            <li><a href="/decklist/1/0">エルフ</a></li>
            <li><a href="/decklist/2/0">ロイヤル</a></li>
            <li><a href="/decklist/3/0">ウィッチ</a></li>
            <li><a href="/decklist/4/0">ドラゴン</a></li>
            <li><a href="/decklist/5/0">ネクロマンサー</a></li>
            <li><a href="/decklist/6/0">ヴァンパイア</a></li>
            <li><a href="/decklist/7/0">ビジョップ</a></li>
            <li><a href="/decklist/8/0">ネメシス</a></li>
        </ul>
        <h3>カード一覧</h3>
        <ul>
            <li><a href="/cardlist/1">エルフ</a></li>
            <li><a href="/cardlist/2">ロイヤル</a></li>
            <li><a href="/cardlist/3">ウィッチ</a></li>
            <li><a href="/cardlist/4">ドラゴン</a></li>
            <li><a href="/cardlist/5">ビジョップ</a></li>
            <li><a href="/cardlist/6">ヴァンパイア</a></li>
            <li><a href="/cardlist/7">ネクロマンサー</a></li>
            <li><a href="/cardlist/8">ネメシス</a></li>
            <li><a href="/cardlist/0">ニュートラル</a></li>
        </ul>
    </div>
</div>
<div class="content">
@yield('content')
</div>
</body>
</html>





