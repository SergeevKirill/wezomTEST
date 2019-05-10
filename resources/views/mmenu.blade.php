<section id="my-menu" class="hidden">
    <ul class="header-menu">
        <li class="mmenu__navigation"><a href="#" class="mmenu-menu-item">Навигация</a>
            <ul>
                @foreach($mock->menu->titles as $menu_item)
                    @if($menu_item == $mock->menu->titles[0])
                        <li><a href="{{url('/')}}" class="mmenu-menu-item">{{$menu_item}}</a></li>
                    @else
                        <li><a href="#" class="mmenu-menu-item">{{$menu_item}}</a></li>
                    @endif
                @endforeach
            </ul>
        </li>
        <li class="mmenu__menu">
            <a href="#">Меню</a>
            <ul>
                @foreach ($mock->item_menu->item_titles as $title)
                    <li class="menu-upper__item">
                        <a href="#" class="menu-upper__item-text">
                            <span>{{$title}}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </li>
        @foreach($mock->footer->link_blocks as $item)
            <li class="mmenu__footer-links"><a href="#">{{$item->title}}</a>
                <ul>
                    @foreach($item->items as $link)
                        <li><a href="{{url('/contacts')}}" class="">{{$link}}</a></li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
    <button class="close-mmenu">
        <svg class="close-mmenu__icon">
            <use xlink:href="sprite/sprite.svg#sprite-cross"></use>
        </svg>
    </button>

</section>
