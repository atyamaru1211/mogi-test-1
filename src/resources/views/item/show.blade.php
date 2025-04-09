@extends('layout.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/item/show.css') }}" />
@endsection

@section('link')
<div class="header-search">
    <form class="search-form">
        <input class="search-form__keyword-input" type="text" name="keyword" placeholder="なにをお探しですか？">
    </form>
</div>
<nav class="header-nav">
    <ul class="header-nav__list">
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
</nav>
@endsection

@section('content')
<div class="item-detail">
    <div class="item-detail__left">
        <div class="item-img">
            <img src="item-img__content" alt="商品画像">
        </div>
    </div>
    <div class="item-detail__right">
        <h2 class="item-detail__name">商品名がここに入る</h2>
        <p class="item-detail__brand">ブランド名</p>
        <div class="item-detail__price">
            <span class="item-detail__price-amount">￥47,000</span>
            <span class="item-detail__price-tax">(税込)</span>
        </div>
        <div class="item-detail__actions">
            <button class="like-button">
                <img class="like-button__icon" src="{{ asset('images/star.svg') }}" alt="いいね">
                <span class="like-button__count">3</span>
            </button>
            <button class="comment-button">
                <img class="comment-button__icon" src="" alt="コメント">
                <span class="comment-button__count">1</span>
            </button>
        </div>
        <button class="purchase-button">購入手続きへ</button>

        <div class="item-detail__description">
            <h3 class="item-detail__description-title">商品説明</h3>
            <p class="item-detail__description-text">
                カラー：グレー
            </p>
        </div>

        <div class="item-detail__attributes">
            <h3 class="item-detail__attributes-title">商品の情報</h3>
            <table class="item-attributes__table">
                <tr class="item-attributes__row">
                    <th class="item-attributes__label">カテゴリー</th>
                    <!--繰り返しのあれ入れる？-->
                    <td class="item-attributes__value">洋服</td>
                    <td class="item-attributes__value">メンズ</td>
                </tr>
                <tr class="item-attributes__row">
                    <th class="item-attributes__label">商品の状態</th>
                    <td class="item-attributes__value">良好</td>
                </tr>
            </table>
        </div>

        <div class="item-detail__comments">
            <h3 class="item-detail__comments-title">コメント<p>(1)</p></h3>
            <ul class></ul>
        </div>

    </div>
</div>
@endsection
