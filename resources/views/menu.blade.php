<section class="menu content centered">
    <div class="menu__container js-dropdown">
        <div class="menu-burger">
            <img src="{{asset('static/img/burger.png')}}" alt="">
        </div>
        <div class="menu-title">
            {{$mock->menu->menu}}
        </div>
        <div class="menu-item__container js-dropdown-target">
            @foreach ($mock->item_menu->item_titles as $title)
                    <div class="menu-item">
                        <a href="#" class="menu-item__text">
                            <span>{{$title}}</span>
                            <svg>
                                <use xlink:href="sprite/sprite.svg#sprite-right-arrow"></use>
                            </svg>
                        </a>
                    </div>
            @endforeach
        </div>
    </div>
    <div class="menu-search__wrapper">
        <form action="#" class="menu-search__form">
            <input data-rule-minlegth="2" data-msg-minlength="Минимальное количество символов - {0}" type="search" class="menu-search__input" placeholder="Поиск по сайту">
            <select name="search_select" id="search_select" class="menu-search__select">
                <option value="1">Все категории</option>
                <option value="2">1</option>
            </select>
        </form>
        <button type="submit" class="button button--orange button--search">
            <svg class="search-image">
                <use xlink:href="sprite/sprite.svg#sprite-search"></use>
            </svg>
            <span class="search-text">
                {{$mock->menu->search_text}}
            </span>
        </button>
    </div>
</section>