@extends('layout.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/item/index.css')}}">
@endsection

@section('link')
<form class="search-form">
    <input class="search-form__keyword-input" type="text" name="keyword" placeholder="なにをお探しですか？">
</form>
<ul class="header-nav">
    <li class="header-nav__item">
        <a class="header-nav__link" href="/logout">ログアウト</a>
    </li>
    <li class="header-nav__item">
        <a class="header-nav__link" href="/mypage">マイページ</a>
    </li>
    <li class="header-nav__item">
        <a class="header-nav__button" href="/sell">出品</a>
    </li>
</ul>
@endsection

@section('content')

@endsection
