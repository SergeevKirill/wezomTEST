@extends('template')
@section('bodyClass', 'item-page')
@section('similarClass', 'similar')
@section('content')
    @include('mmenu')
    @include('header')
    @include('popups')
    @include('undernav')
    @include('menu')
    @include('item-description')
    @include('item-tabs')
    @include('products', [
    "title" => "Похожие товары",
    "mark" => "Fosser",
    "item_price_class" => "item-similar-price"
    ])
    @include('footer')
@endsection