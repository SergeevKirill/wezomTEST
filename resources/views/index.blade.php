@extends('template')
@section('similarClass', 'index')
@section('content')
    @include('mmenu')
    @include('header')
    @include('popups')
    @include('undernav')
    @include('menu')
    @include('forms')
    @include('products', [
    "title" => "Карточки товаров",
    "mark" => "Mark",
    "item_price_class" => " "])
    @include('footer')
@endsection