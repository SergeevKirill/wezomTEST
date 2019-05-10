<div class="products__container">
    @foreach($mock->catalog_items->items as $item)
            <div class="item__wrapper">
                <div class="item-mark__wrapper">
                <span class="item-mark">
                    {{$mark}}
                </span>
                </div>
                <div class="item-title__wrapper">
                    <a href="{{url('item')}}" class="item-title">
                        <span class="item-title__text">{{$item->title}}</span>
                        <span class="item-title__text">{{$item->desc}}</span>
                    </a>
                </div>
                <div class="item-reviews__wrapper">
                    <div class="item-reviews">
                        <span class="item-reviews__rating">
                            @for($i=1; $i <= 5; $i++)
                                @if($i <= $item->active_stars)
                                    <svg class="active-star">
                                        <use xlink:href="sprite/sprite.svg#sprite-star"></use>
                                    </svg>
                                @else
                                    <svg class="inactive-star">
                                        <use xlink:href="sprite/sprite.svg#sprite-star"></use>
                                    </svg>
                                @endif
                            @endfor
                        </span>
                        <a href="{{url('item')}}#reviews" class="item-reviews__review">
                            {{$item->reviews_number}}
                        </a>
                    </div>
                    <div class="item__in-stock">
                        {{$item->in_stock}}
                    </div>
                </div>
                <div class="item-preview__wrapper">
                    <img src="{{asset($item->image)}}" class="item-preview" alt="">
                    <div class="item-characteristics">
                        @foreach($item->characteristics as $characteristic)
                            <div class="item-characteristics__item">
                                <svg class="characteristic">
                                    <use xlink:href="{{$characteristic->img}}"></use>
                                </svg>
                                <span class="item-characteristics__title">{{$characteristic->title}}</span>
                            </div>
                        @endforeach
                    </div>
                    <div class="item-special-tag">
                        @foreach($item->image_specials as $special)
                            <img src="{{asset($special->path)}}" alt="" class="special-image">
                        @endforeach
                    </div>
                </div>
                <div class="item-price__wrapper {{$item_price_class}}">
                    <div class="item-price--new">
                        <span class="item-price--new--digits">
                        {{$item->new_price}}
                        </span>
                        грн.
                    </div>
                    @if($item->old_price !== '')
                        <div class="item-price--old">
                            {{$item->old_price}} грн.
                        </div>
                    @else
                    @endif
                </div>
                <div class="item-buy-button__wrapper @yield('similarClass')">
                    <span class="@yield('similarClass') item-quantity">
                        <input type="number" class="table-input" min="1" placeholder="4" max="20"> шт.
                    </span>
                    <button data-mfp-src="#cart" data-effect="mfp-fadeout" class="open cart-open button-buy button--gradient">
                        <span class="item-buy-button__container">
                            <svg class="button__icon--cart">
                                <use xlink:href="sprite/sprite.svg#sprite-cart-buy"></use>
                            </svg>
                            <span class="item-buy-button__text">
                                Купить <span class="buy-hide">товар</span>
                            </span>
                        </span>
                    </button>
                </div>
                <div class="item-bottom-button__wrapper">
                    <a href="#" class="item-bottom-button">
                        <svg class="item-bottom-button__compare-img">
                            <use xlink:href="sprite/sprite.svg#sprite-compare"></use>
                        </svg><span class="item-bottom-button__text">Сравнить товар</span>
                    </a>
                    <a href="#" class="item__bottom-button">
                        <svg class="item-bottom-button__favourites-img">
                            <use xlink:href="sprite/sprite.svg#sprite-favourite"></use>
                        </svg><span class="item-bottom-button__text">В избранное</span>
                    </a>
                </div>
            </div>
    @endforeach
</div>