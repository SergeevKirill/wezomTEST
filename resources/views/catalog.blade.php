@extends('template')
@section('bodyClass', 'item-page')
@section('similarClass', 'similar')
@section('content')
    @include('mmenu')
    @include('header')
    @include('popups')
    @include('undernav')
    @include('menu')
    <section class="catalog__wrapper content centered">
        <div class="adaptive bread-crumbs">
            <ul class="path-container">
                @foreach($mock->catalog_items->bread_crumbs as $bread_crumb)
                    @if($loop->last)
                        <li class="flex-vertical-center">
                    <span class="path-link">
                        {{$bread_crumb}}
                    </span>
                        </li>
                    @else
                        <li class="flex-vertical-center">
                            <a href="#" class="path-link">
                                {{$bread_crumb}}
                            </a>
                            <span class="path-divider"></span>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
        <div class="adaptive catalog-items__upper">
            <h1 class="catalog-items__title">
                Автомобильные шины
            </h1>
            <div class="sort__wrapper">
                <button type="button" class="filter-show">
                    <svg class="filter-icon">
                        <use xlink:href="sprite/sprite.svg#sprite-filter-"></use>
                    </svg>
                    <span class="filter-show-text">
                        Показать фильтр
                    </span>
                </button>
                <span class="sort__title">Сортировать</span>
                <select name="sortby" id="sortby" class="js-sort-by forms__select">
                    @foreach($mock->catalog_items->sort as $sort)
                        <option value="">{{$sort}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        @include('filter', [
        "specifier" => ""])
        @include('catalog-items')
    </section>
    @include('footer')
@endsection
