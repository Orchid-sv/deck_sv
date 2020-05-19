<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="/css/nav.css" rel="stylesheet">
    <!-- <link href="/css/auth.css" rel="stylesheet"> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

</head>
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
                <li><a href="/user/{{$user->id}}">{{$user->name}}</a></li>
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
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</html>
