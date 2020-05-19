@extends('top.layouts.default')

@section('title','カードリスト')

@push('css')
    <link href="/css/cardlist.css" rel="stylesheet">
@endpush

@section('content')
<h5>カードリスト</h5>
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
<table>
    <tr>
        <th>カード名</th>
        <th>カード情報</th>
    </tr>
@foreach($data as $value)
    @if($value["description"]== null)
    @else
	<tbody>
	<tr>
        <td class="card_image"> 
            <a href='/card/{{$value["card_id"]}}'><img class="card_img" src='https://shadowverse-portal.com/image/card/phase2/common/C/C_{{$value["card_id"]}}.png'><br>{{$value["card_name"]}}</a>
        </td>
		<td height="20%">
        @if($value["skill_disc"] == null)
                -
                @else
                <?php echo $value["skill_disc"] ?>
                @endif
        </td>
		</tr>
    </tbody>
    @endif
@endforeach
</table>
<div class="card_pagination">
{{$data->links()}}
</div>
@endsection