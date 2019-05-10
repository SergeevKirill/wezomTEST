<section class="item-description__wrapper content centered">
    <div class="item-description">
        <div class="item-image__container">
            <img data-mfp-src="#image-popup" src="{{asset('static/img/item-image.jpg')}}" class="open item-image" alt="">
        </div>
        <div class="item-description__container">
            <div class="path-to-item">
                <ul class="path-container">
                    @foreach($mock->item_spec->path as $item)
                        @if($loop->last)
                            <li class="flex-vertical-center">
                                <span class="path-link">{{$item}}</span>
                            </li>
                        @else
                            <li class="flex-vertical-center">
                                <a href="#" class="path-link">{{$item}}</a>
                                <span class="path-divider"></span>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>

            @foreach($mock->item_spec->title as $title)
                <h1 class="item-name">{{$title}}</h1>
            @endforeach
            <div class="image__wrapper">
                <div class="image__container">
                    <img data-mfp-src="#image-popup" src="{{asset('static/img/item-image.jpg')}}" class="open mobile-item-image" alt="">
                </div>
                <div class="image-popup">
                    <img src="{{asset('static/img/item-image.jpg')}}" alt="" class="image-popup__item" id="image-popup" >
                </div>
                <div class="characteristics__container">
                    <div class="item-special-characteristics">
                        <div class="item-special-images">
                            <img src="{{asset('static/img/new.png')}}" alt="" class="item-special-image">
                            <img src="{{asset('static/img/hit.png')}}" alt="" class="item-special-image">
                            <img src="{{asset('static/img/sale.png')}}" alt="" class="item-special-image">
                        </div>
                        <div class="item-reviews__rating">
                            @for($i=0; $i<=4; $i++)
                                @if($i <= $mock->item_description->active_stars-1)
                                    <svg class="active-star">
                                        <use xlink:href="sprite/sprite.svg#sprite-star"></use>
                                    </svg>
                                @else
                                    <svg class="inactive-star">
                                        <use xlink:href="sprite/sprite.svg#sprite-star"></use>
                                    </svg>
                                @endif
                            @endfor
                        </div>
                        <a href="#reviews" data-wstabs-ns="group-h" data-wstabs-button="3" class="item-reviews__review anchor-scroll">Отзывы (10)</a>
                    </div>
                    <div class="item-characteristics">
                        <div class="item-characteristics__wrapper">

                            @foreach($mock->item_spec->characteristics as $char)
                                <div class="item-characteristics__item">
                                    <svg class="characteristic {{$char->class}}">
                                        <use xlink:href="sprite/sprite.svg#sprite-{{$char->image}}"></use>
                                    </svg>
                                    <span class="item-characteristics__title">{{$char->title}}</span>
                                </div>
                            @endforeach
                        </div>
                        <div class="item-special-images">
                            <img src="{{asset('static/img/new.png')}}" alt="" class="item-special-image">
                            <img src="{{asset('static/img/hit.png')}}" alt="" class="item-special-image">
                            <img src="{{asset('static/img/sale.png')}}" alt="" class="item-special-image">
                        </div>
                        <div class="manufacturer-wrapper">
                            <img src="{{asset('static/img/hankook.png')}}" class="manufacturer" alt="">

                            <a href="#" class="section-title__redirect-link">
                                <span class="underline">{{$mock->item_spec->another}}</span>
                                <span class="arrow">→</span>
                            </a>
                        </div>
                    </div>
                    <div class="characteristics__wrapper">
                        <h1 class="characteristics__title">
                            {{$mock->item_spec->char_title}}
                        </h1>
                        <div class="table-wrap">
                            <table class="characteristics__table">
                                @foreach($mock->characteristics_table as $row)
                                    <tr class="characteristics__row">
                                        @foreach($row as $table_item)
                                            <td class="characteristics__cell">{{$table_item}}</td>
                                        @endforeach
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="buy-advantages__container">
                <div class="buy__wrapper">
                    <h1 class="buy__title">
                        Выберите размер
                    </h1>
                    <div class="buy__select">
                        <select name="buy_select" id="buy_select" class="forms__select">
                            @foreach($mock->item_description->select_options as $options)
                                <option value="{{$options->id}}">{{$options->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="quantity__wrapper">
                        @foreach($mock->item_price as $items)
                            @if($loop->first)
                                <div data-price="{{$items->data_price}}" class="quantity__in-stock">
                                    В наличии: {{$items->inStock}}шт.
                                </div>
                            @else
                                <div  data-price="{{$items->data_price}}" class="quantity__in-stock hidden">
                                    В наличии: {{$items->inStock}}шт.
                                </div>
                            @endif
                        @endforeach
                        <div class="quantity__choose">
                            <div class="choose">
                                Выберите кол-во:
                            </div>
                            <div class="choose__in-stock">
                                <select name="quantity__select" id="quantity__select" class="forms__select">
                                    <option value="1">4 шт.</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="item-bottom-button__wrapper">
                        @foreach($mock->item_spec->bottom_buttons as $button)
                            <a href="#" class="item-bottom-button">
                                <svg class="item-bottom-button__compare-img">
                                    <use xlink:href="sprite/sprite.svg#sprite-{{$button->img}}"></use>
                                </svg>
                                <span class="item-bottom-button__text">{{$button->title}}</span>
                            </a>
                        @endforeach
                    </div>
                    <div class="item-price__wrapper">
                        @foreach($mock->item_price as $items)
                            @if($loop->first)
                                <div data-price="{{$items->data_price}}" class="item-price--new">
                                    <span class="item-price--new--digits">
                                    {{$items->curPrice}}
                                    </span>
                                    грн.
                                </div>
                                <div data-price="{{$items->data_price}}" class="item-price--old">
                                    {{$items->oldPrice}} грн.
                                </div>
                            @else
                                <div data-price="{{$items->data_price}}" class="item-price--new hidden">
                                    <span class="item-price--new--digits">
                                    {{$items->curPrice}}
                                    </span>
                                    грн.
                                </div>
                                <div data-price="{{$items->data_price}}" class="item-price--old hidden">
                                    @if($items->oldPrice === '')

                                    @else
                                        {{$items->oldPrice}} грн.
                                    @endif
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="item-buy-button__wrapper">
                        <button data-mfp-src="#cart" data-effect="mfp-fadeout" class="open button--gradient button-buy-button button-buy">
                            <span class="item-buy-button__container">
                                <svg class="button__icon--cart">
                                    <use xlink:href="sprite/sprite.svg#sprite-cart-buy"></use>
                                </svg>
                                <span class="item-buy-button__text">
                                    Купить товар
                                </span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="advantage__wrapper">
                    @foreach($mock->item_advantages as $advantage)
                        <div class="advantage__item">
                            <div class="advantage-image__wrapper">
                                <svg class="{{$advantage->image_class}}">
                                    <use xlink:href="{{$advantage->image}}"></use>
                                </svg>
                            </div>
                            <div class="advantage__text">
                                {{$advantage->text}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="characteristics__wrapper">
                <h1 class="characteristics__title">
                    {{$mock->item_spec->char_title}}
                </h1>
                <div class="table-wrap">
                    <table class="characteristics__table">
                        @foreach($mock->characteristics_table as $row)
                            <tr class="characteristics__row">
                                @foreach($row as $table_item)
                                    <td class="characteristics__cell">{{$table_item}}</td>
                                @endforeach
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>