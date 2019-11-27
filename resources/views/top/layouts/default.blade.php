<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/nav.css" rel="stylesheet" media="screen">
    @stack('css')
</head>
<body>
    <!-- header部分 -->
<nav class="navbar navbar-inverse ">
	<div class="container-fluid">
			<a class="navbar-brand" href="/">
				shadowverse デッキ一覧
			</a>
            <ul class="nav navbar-right header">
                <button type="button" class="btn btn-default navbar-btn">ログイン</button>
                <button type="button" class="btn btn-default navbar-btn">新規登録</button>
            </ul>
		</div>
	</div>
</nav>

<!-- サイドメニュー -->
<div class="col-md-3">
    <div class="panel panel-default">
        <div class="panel-heading">
            ローテーションデッキ一覧
        </div>
        <ul class="nav nav-pills nav-stacked">
            <li><a href=""><i class="glyphicon glyphicon-menu-right"></i> エルフ</a></li>
            <li><a href=""><i class="glyphicon glyphicon-menu-right"></i> ロイヤル</a></li>
            <li><a href=""><i class="glyphicon glyphicon-menu-right"></i> ウィッチ</a></li>
            <li><a href=""><i class="glyphicon glyphicon-menu-right"></i> ドラゴン</a></li>
            <li><a href=""><i class="glyphicon glyphicon-menu-right"></i> ビジョップ</a></li>
            <li><a href=""><i class="glyphicon glyphicon-menu-right"></i> ヴァンパイア</a></li>
            <li><a href=""><i class="glyphicon glyphicon-menu-right"></i> ネクロマンサー</a></li>
            <li><a href=""><i class="glyphicon glyphicon-menu-right"></i> ネメシス</a></li>
        </ul>
        <div class="panel-heading">
            アンリミテッドデッキ一覧
        </div>
        <ul class="nav nav-pills nav-stacked">
            <li><a href=""><i class="glyphicon glyphicon-menu-right"></i> エルフ</a></li>
            <li><a href=""><i class="glyphicon glyphicon-menu-right"></i> ロイヤル</a></li>
            <li><a href=""><i class="glyphicon glyphicon-menu-right"></i> ウィッチ</a></li>
            <li><a href=""><i class="glyphicon glyphicon-menu-right"></i> ドラゴン</a></li>
            <li><a href=""><i class="glyphicon glyphicon-menu-right"></i> ビジョップ</a></li>
            <li><a href=""><i class="glyphicon glyphicon-menu-right"></i> ヴァンパイア</a></li>
            <li><a href=""><i class="glyphicon glyphicon-menu-right"></i> ネクロマンサー</a></li>
            <li><a href=""><i class="glyphicon glyphicon-menu-right"></i> ネメシス</a></li>
        </ul>
        <div class="panel-heading">
            カード一覧
        </div>
        <ul class="nav nav-pills nav-stacked">
            <li><a href=""><i class="glyphicon glyphicon-menu-right"></i> エルフ</a></li>
            <li><a href=""><i class="glyphicon glyphicon-menu-right"></i> ロイヤル</a></li>
            <li><a href=""><i class="glyphicon glyphicon-menu-right"></i> ウィッチ</a></li>
            <li><a href=""><i class="glyphicon glyphicon-menu-right"></i> ドラゴン</a></li>
            <li><a href=""><i class="glyphicon glyphicon-menu-right"></i> ビジョップ</a></li>
            <li><a href=""><i class="glyphicon glyphicon-menu-right"></i> ヴァンパイア</a></li>
            <li><a href=""><i class="glyphicon glyphicon-menu-right"></i> ネクロマンサー</a></li>
            <li><a href=""><i class="glyphicon glyphicon-menu-right"></i> ネメシス</a></li>
        </ul>
        <div class="panel-heading">
            その他
        </div>
        <ul class="nav nav-pills nav-stacked">
            <li><a href=""><i class="glyphicon glyphicon-menu-right"></i> 掲示板</a></li>
        </ul>
    </div>
</div>
<div class="col-md-1">
@yield('content')
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>





