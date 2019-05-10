<footer class="footer__wrapper">
    <div class="footer content centered">
        <div class="footer-upper">
            <div class="footer-block--big">
                <div class="footer-block-title__wrapper">
                    <h2 class="footer-block-title">
                        Блок 1
                    </h2>
                </div>
                <div class="footer-block__content">
                    <h2 class="footer-block-title--uppercase">
                        Будьте в курсе новостей и новинок!
                    </h2>
                    <div class="subscribe-text">
                        Подписывайтесь на рассылку
                    </div>
                    <div class="flex">
                        <form action="" class="form-flex js-footer-form js-form-validate">
                            <div class="input-wrapper">
                                <input data-rule-email="true" data-rule-required="true" data-msg-required="Введите корректный email адрес" data-msg-minlength="Введите корректный email адрес" data-rule-minlength="5" name="subscribe" data-msg-email="Введите корректный email адрес" type="email" placeholder="Укажите свой email для подписки" class="footer-block__email-input">
                            </div>
                        </form>
                        <button data-effect="mfp-fadeout" type="submit" class="button__footer--big sub-button open">
                            <svg class="sub-icon">
                                <use xlink:href="sprite/sprite.svg#sprite-sub"></use>
                            </svg>
                            <span class="sub-text">
                                Подписаться
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            @foreach($mock->footer->link_blocks as $item)
                <div class="footer-block--small">
                    <div class="footer-block-title__wrapper">
                        <h2 class="footer-block-title">
                            {{$item->title}}
                        </h2>
                    </div>
                    <div class="footer-block__content column">
                        @foreach($item->items as $link)
                            <a href="{{url('contacts')}}" class="footer-link">{{$link}}</a>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
        <div class="footer-lower">
            <div class="footer-block--big">
                <div class="flex-vertical-center">
                    <div class="footer-logo">
                        <img src="{{url('static/img/footer-logo.png')}}" alt="">
                    </div>
                    <div class="footer-copyright-text">&copy; Copyright 2017. Тестовое задание Wezom</div>
                </div>
            </div>
            <div class="footer-block--small">
                <div class="social-media">
                    @foreach($mock->footer->social_media as $media)
                        <a href="#" class="social-media__link">
                            <svg class="social-media__image">
                                <use xlink:href="{{$media}}"></use>
                            </svg>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="footer-block--small"></div>
            <div class="footer-block--small made-by">
                <div class="wezom-logo">
                    <img src="{{url('static/img/wezom-logo.png')}}" alt="">
                </div>
                <div class="made-by__wrapper">
                    <span class="made-by--grey">
                        Разработка тестового
                    </span>
                    <span class="made-by--white">Wezom Agency</span>
                </div>
            </div>
        </div>
    </div>
</footer>