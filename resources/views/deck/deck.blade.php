@extends('top.layouts.default')

@section('title')
{{$deck->name}}&nbspデッキレシピ
@endsection

@push('css')
    <link href="/css/deck.css" rel="stylesheet">
@endpush
@section('content')
<div class="user">
    <a href="/user/{{$deck_user->id}}">
        <img class="deckmy_icon" src="/img/user_icon/{{$deck_user->icon_image}}">
        &nbsp{{$deck_user->name}}
    </a>
    (投稿日時：{{$deck->created_at->format('Y年m月d日 h時m分')}})
</div>
<h5>{{$deck->name}}&nbsp;&nbsp;デッキレシピ</h5>
<div class="deck_img">
@foreach($deck_list as $date)
    <tr>
        <td class="cost"></td>
        @for($date["num"];$date["num"]>0;$date["num"]--)
        <td>
        <a href='/card/{{$date["card_id"]}}'>
            <img class="card_img" src='https://shadowverse-portal.com/image/card/phase2/common/C/C_{{$date["card_id"]}}.png'>
        </a>
        </td>
        @endfor
    </tr>
@endforeach
</div>
<div class="deck_list">
<table class="decl_listtable"  width="100%">
    <tr>
        <th width="10%">コスト</th>
        <th>カード名</th>
        <th width="10%">枚数</th>

    </tr>
    @foreach($deck_list as $date)
    <tr>
        <td>{{$date["cost"]}}</td>
        <td class="card_name"><a href='/card/{{$date["card_id"]}}'>{{$date["card_name"]}}</a></td>
        <td>{{$date["num"]}}</td>
    </tr>
    @endforeach   
</table>
</div>
<h6>デッキ説明</h6>
<p class="box"></p>
<div class="description">{{$deck->comment}}</div>

<h6>コメント</h6>
<p class="box"></p>
@if(Auth::check())
<form method="post" action="/comment_add">
{{ csrf_field() }}
<p class="textarea"><textarea name="comment"></textarea></p>
<input type="hidden" name="user_id" value="{{$user}}">
<input type="hidden" name="deck_id" value="{{$deck->id}}">
<p class="submit"><input type="submit" value="コメントする"></p>
@else
<div>ログインするとコメントすることが出来ます</div>
@endif

<div class="comment_list">
@foreach($comment as $value)
<div>
    <a href="/user/{{$value->user->id}}"><img class="deckmy_icon" src="/img/user_icon/{{$value->user->icon_image}}">&nbsp{{$value->user->name}}</a>
    <p class="comment_date">{{$value->created_at}}</p>
    <p class="comment">{{$value->comment}}</p>
</div>
<p class="coment_box"></p>
@endforeach
</div>
    




</div>

</form>
@endsection
