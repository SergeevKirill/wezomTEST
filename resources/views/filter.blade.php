<section class="filter__wrapper">
    <h1 class="filter__title">
        Фильтр товаров
    </h1>
    <form action="#">
        <div class="filter__block">
            <div class="filter-price__wrapper">
                <span class="filter__block-title">
                    Цена
                </span>
                <button data-filter-option-button="0" type="button" class="filter-option-show">
                <span class="filter__block-title">
                    Цена
                </span>
                    <svg class="filter-option-show__icon">
                        <use xlink:href="sprite/sprite.svg#sprite-down-arrow"></use>
                    </svg>
                </button>
                <div data-filter-option-block="1" class="filter-option-slide max-height-0">
                    <div class="filter-price">
                        <span class="filter-price__text">от</span>
                        <input type="text" min="100" max="100000" placeholder="100" value="100" class="filter-price__input">
                        <span class="filter-price__text">до</span>
                        <input type="text" min="100" max="100000" placeholder="100 000" value="100 000" class="filter-price__input">
                        <span class="filter-price__text">грн.</span>
                    </div>
                    <div class="filter-price__range-slider">
                        <input type="text" data-min="100" data-max="100000" data-from="" data-to="" class="js-range-slider" name="my_range" value="" />
                    </div>
                </div>
            </div>
        </div>
        <div class="filter__block">
            <span class="filter__block-title">
                Производитель
            </span>
            <button data-filter-option-button="1" type="button" class="filter-option-show">
                <span class="filter__block-title">
                    Производитель
                </span>
                <svg class="filter-option-show__icon">
                    <use xlink:href="sprite/sprite.svg#sprite-down-arrow"></use>
                </svg>
            </button>
            <div data-filter-option-block="1" class="creator__wrapper filter-option-slide max-height-0">
                <div class="creator__container slide-target" data-slide-block="1">
                    @foreach($mock->creator as $creator)
                        <div class="creator">
                            <input type="checkbox" id="{{$creator}}{{$specifier}}" class="creator-checkbox">
                            <label for="{{$creator}}" class="creator-checkbox__label"></label>
                            <label for="{{$creator}}" class="creator__text">{{$creator}}</label>
                        </div>
                    @endforeach
                </div>
                @if(sizeof($mock->creator) > 10)
                    <button type="button" data-slide-button="1" class="creator__show-all slide-down">
                        Показать всех производителей
                    </button>
                @endif
            </div>
        </div>
        <div class="filter__block">
            <span class="filter__block-title">
                Диаметр
            </span>
            <button data-filter-option-button="2" type="button" class="filter-option-show">
                <span class="filter__block-title">
                    Диаметр
                </span>
                <svg class="filter-option-show__icon">
                    <use xlink:href="sprite/sprite.svg#sprite-down-arrow"></use>
                </svg>
            </button>
            <div data-filter-option-block="2" class="diameter__wrapper filter-option-slide max-height-0">
                <div class="diameter__container slide-target" data-slide-block="2">
                    @foreach($mock->diameter as $diameter)
                        <div class="filter-checkbox__wrapper">
                            <input type="checkbox" id="{{$diameter}}{{$specifier}}" class="creator-checkbox">
                            <label for="{{$diameter}}" class="creator-checkbox__label"></label>
                            <label for="{{$diameter}}" class="creator__text">{{$diameter}}</label>
                        </div>
                    @endforeach
                </div>
                @if(sizeof($mock->diameter) > 10)
                    <button type="button" data-slide-button="2" class="creator__show-all slide-down">
                        Показать все диаметры
                    </button>
                @endif
            </div>
        </div>
        <div class="filter__block">
            <span class="filter__block-title">
                Сезонность
            </span>
            <button data-filter-option-button="3" type="button" class="filter-option-show">
                <span class="filter__block-title">
                    Сезонность
                </span>
                <svg class="filter-option-show__icon">
                    <use xlink:href="sprite/sprite.svg#sprite-down-arrow"></use>
                </svg>
            </button>
            <div data-filter-option-block="3" class="seasoning__wrapper filter-option-slide max-height-0">
                @foreach($mock->seasoning as $seasoning)
                    <div class="filter-checkbox__wrapper">
                        <input type="checkbox" id="{{$seasoning}}{{$specifier}}" class="creator-checkbox">
                        <label for="{{$seasoning}}" class="creator-checkbox__label"></label>
                        <label for="{{$seasoning}}" class="creator__text">{{$seasoning}}</label>
                    </div>
                @endforeach
            </div>
        </div>
    </form>
    <button type="reset" class="button button--red js-filter-reset">
        <svg>
            <use xlink:href="sprite/sprite.svg#sprite-cross"></use>
        </svg>
        Очистить фильтр
    </button>
</section>