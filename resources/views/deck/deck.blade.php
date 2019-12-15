@extends('top.layouts.default')

@section('title')
デッキ一覧/ローテーション
@endsection

@push('css')
    <link href="/css/decklist.css" rel="stylesheet">
@endpush

@section('content')
{{ Auth::id() }}
@endsection