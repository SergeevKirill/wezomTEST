<section class="catalog-items__wrapper">
    <div class="bread-crumbs">
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
    <div class="catalog-items__upper">
        <h1 class="catalog-items__title">
            {{$mock->catalog_items->title}}
        </h1>
        <div class="sort__wrapper">
            <span class="sort__title">Сортировать</span>
            <select name="sort" id="sort-by" class="forms__select">
                @foreach($mock->catalog_items->sort as $sort)
                    <option value="">{{$sort}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="catalog-items">
        @include('catalog-items-block', ["mark" => "Fosser", "item_price_class" => "item-similar-price"])
    </div>
    <div class="catalog__page-navigation">
        <a href="#" class="catalog__navigation-arrow">
            <img src="{{asset('static/img/arrow-left.png')}}" alt="">
        </a>
        @for($i=1; $i <= $mock->catalog_items->pages; $i++)
            @if($i === 2)
                <a href="#" class="catalog__page-number is-active">
                    {{$i}}
                </a>
            @else
                <a href="#" class="catalog__page-number">
                    {{$i}}
                </a>
            @endif
        @endfor
        <a href="#" class="catalog__navigation-arrow">
            <img src="{{asset('static/img/arrow-right.png')}}" alt="">
        </a>
    </div>
</section>