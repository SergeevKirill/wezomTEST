<header class="header mm-head" id="my-header">
    <div class="header-burger content centered">
        <button id="mmenu_open" class="header-burger__wrapper">
            <span class="header-burger__item">
            </span>
            <span class="header-burger__item">
            </span>
            <span class="header-burger__item">
            </span>
        </button>
    </div>
    <div class="centered content flex-head">
        <nav class="header-content centered navigation">
            <ul class="header-menu">
                @foreach($mock->menu->titles as $menu_item)
                    @if($menu_item == $mock->menu->titles[0])
                        <li><a href="{{url('/')}}" class="header-menu__item Selected">{{$menu_item}}</a></li>
                    @else
                        <li><a href="#" class="header-menu__item">{{$menu_item}}</a></li>
                    @endif
                @endforeach
            </ul>
        </nav>
        <div class="button-container">
            <button data-mfp-src="#login" data-effect="mfp-fadeout" class="button button--medium button--orange open">
                <span class="button-wrapper">
                    <svg class="button__icon">
                        <use xlink:href="sprite/sprite.svg#sprite-login"></use>
                    </svg>
                    <span>Вход</span>
                </span>
            </button>
        </div>
    </div>
</header>