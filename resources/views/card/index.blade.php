@extends('top.layouts.default')

@section('title',$card["card_name"])

@push('css')
    <link href="/css/card.css" rel="stylesheet">
@endpush

@section('content')
<h5>{{$card["card_name"]}}</h5>
<div class="image"><img src='https://shadowverse-portal.com/image/card/phase2/common/C/C_{{$card["card_id"]}}.png?' class="card_img"></div>
<div class="card_info">
<h6>基本情報</h6>
<p class="box"></p>
<table>
    <tr>
        <th>コスト</th>
        <th>クラス</th>
        <th>カードタイプ</th>
        <th>レア度</th>
        <th>カードパック</th>
        <th>声優</th>
    </tr>
    <tr>
        <td>{{$card["cost"]}}</td>
        <td>
            @if(isset($class["class"]))
            {{$class->class}}
            @else
            ニュートラル
            @endif
        </td>
        <td>{{$card_type->char_type}}</td>
        <td>{{$rarity->rarity}}</td>
        <td>
            @if(isset($card_set_id))
            {{$card_set_id->card_pack}}
            @else
            プライズ
            @endif
        </td>
        <td>{{$card["cv"]}}</td>
    </tr>
    <tr>
        <th colspan="6">ステータス</th>
    </tr>
    <tr>
        <th colspan="3">進化前</th>
        <th colspan="3">進化後</th>
    </tr>
    <tr>
    <td colspan="3">{{$card["atk"]}}/{{$card["life"]}}</td>
    <td colspan="3">{{$card["evo_atk"]}}/{{$card["evo_life"]}}</td>
    </tr>
</table>
</div>
<div class="card_info">
<h6>カード効果</h6>
<p class="box"></p>
    <table>
        <tr>
            <th width="40px">効果</th>
            <td class="card_skill"><?php echo $card["skill_disc"]; ?></td>
        </tr>
        @if($card["char_type"]===1)
        <tr>
            <th>進化後</th>
            <td class="card_skill"><?php echo $card["skill_disc"]; ?></td>
        </tr>
        @endif
    </table>
</div>
<div class="card_info">
<h6>フレーバーテキスト</h6>
<p class="box"></p>
    <table>
        <tr>
            <th width="40px">効果</th>
            <td class="card_skill"><?php echo $card["description"]; ?></td>
        </tr>
        @if($card["char_type"]===1)
        <tr>
            <th>進化後</th>
            <td class="card_skill"><?php echo $card["evo_description"]; ?></td>
        </tr>
        @endif
    </table>
</div>
@endsection