<section class="menu similar content centered">
    <div class="menu-upper dropdown similar">
        <div class="menu-upper__burger">
            <img src="{{asset('static/img/burger.png')}}" alt="">
        </div>
        <div class="menu-upper__title">
            Меню
        </div>
        <div class="menu-upper__items-container similar dropdown-target">
            @foreach ($mock->item_menu->item_titles as $title)
                <div class="menu-upper__item">
                    <a href="#" class="menu-upper__item-text">
                        <span>{{$title}}</span>
                        <svg>
                            <use xlink:href="sprite/sprite.svg#sprite-right-arrow"></use>
                        </svg>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <div class="menu__search-wrapper">
        <form action="#" class="menu__search-form">
            <input data-rule-minlegth="2" data-msg-minlength="Минимальное количество символов - {0}" type="search" class="menu__search-search-input" placeholder="Поиск по сайту">
            <select name="search_select" id="search_select" class="menu__search-select">
                <option value="1">Все категории</option>
                <option value="2">1</option>
            </select>
        </form>
        <button type="submit" class="orange-button--search">
            <svg class="search-image">
                <use xlink:href="sprite/sprite.svg#sprite-search"></use>
            </svg>
            <span class="search-text">
                Поиск
            </span>
        </button>
    </div>
</section>