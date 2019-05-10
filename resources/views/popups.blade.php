<section class="mfp-hide">
    <div class="mfp-hide white-popup" id="login">
        <div class="login-popup__left-side">
            <h1 class="title">
                Вход в личный кабинет
            </h1>
            <form action="#" class="js-form-validate">
                <div class="input-wrapper">
                    <label for="login_email" class="popup__label">Ваш email</label>
                    <input data-rule-required="true" name="login_email" data-rule-email="true" data-msg-required="Это поле обязательно" data-msg-email="Введите корректный email адрес" type="email" id="login_email" placeholder="mikel_ivanov@98@gmail.com" class="popup__input">
                </div>
                <div class="input-wrapper">
                    <label for="login_password" class="popup__label">Ваш пароль</label>
                    <input data-rule-required="true" name="login_password" data-rule-minlength="6" data-msg-required="Это поле обязательно" data-msg-minlength="Минимальная длина - {0} символов" type="password" placeholder="************" id="login_password" class="popup__input">
                </div>
                <div class="checkbox-wrapper">
                    <input type="checkbox" class="checkbox" id="login_checkbox">
                    <label for="login_checkbox" class="checkbox__label"></label>
                    <span class="popup__label">Запомнить меня</span>
                </div>
                <div class="popup__links-container">
                    <button class="popup__link">Забыли пароль?</button>
                    <button class="popup__link">Регистрация</button>
                </div>
                <button type="submit" class="button--grey button button--no-uppercase button-popup">Войти в личный кабинет</button>
            </form>
        </div>
        <div class="login-popup__right-side">
            <h1 class="title">Войти с помощью</h1>
            <div class="login-with__container">
                @foreach($mock->login_with as $button)
                    <div class="login-with__wrapper">
                        <button class="login-with__button {{$button->class}}">
                        <span class="login-with__button-wrapper">
                            <svg>
                                <use xlink:href="sprite/sprite.svg#sprite-{{$button->image}}"></use>
                            </svg>
                            <span class="popup-button-text">{{$button->title}}</span>
                        </span>
                        </button>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="mfp-hide white-popup" id="call_me_back">
        <div class="white-popup__wrapper">
            <h1 class="title">Перезвоните мне</h1>
            <form action="#" class="js-form-validate">
                <div class="input-wrapper">
                    <label for="call-me-back-tel" class="popup__label">Номер телефона</label>
                    <input id="call-me-back-tel" name="phone_number" data-rule-required="true" data-msg-required="Это поле обязательно" data-rule-minlength="19" data-msg-minlength="Введите номер телефона полностью" type="tel" class="popup__input js-phone-mask">
                </div>
                <div class="popup-button-wrapper">
                    <input type="submit" value="Перезвоните мне" class="orange-button centered">
                </div>
            </form>
            <div class="call-me-hidden">
                <h1 class="title">
                    Наши контактные номера
                </h1>
                <a class="popup-phone-number">
                    <svg class="phone-number">
                        <use xlink:href="sprite/sprite.svg#sprite-phone"></use>
                    </svg>
                    +380 98 170 00 740
                </a>
                <a class="popup-phone-number">
                    <svg class="phone-number">
                        <use xlink:href="sprite/sprite.svg#sprite-phone"></use>
                    </svg>
                    +380 98 170 00 740
                </a>
            </div>
        </div>
    </div>
    <div class="mfp-hide white-popup" id="subscribed">
        <div class="white-popup__wrapper subscribe-popup">
            <h1 class="title">Вы успешно подписались на рассылку!</h1>
        </div>
    </div>
    <div class="mfp-hide white-popup cart__wrapper" id="cart">
        <h1 class="cart__title">
            Ваша корзина
        </h1>
        <div class="cart__container">
            <form action="query.php">
                @foreach($mock->cart_items as $item)
                    <div class="cart-item">
                        <div class="cart-item__delete-item">
                            <div class="are-you-sure__wrapper">
                                <h2 class="are-you-sure">
                                    Вы уверены?
                                </h2>
                                <div class="are-you-sure__buttons">
                                    <button data-sure-delete="true" type="button" class="are-you-sure--yes">
                                        <svg class="yes">
                                            <use xlink:href="sprite/sprite.svg#sprite-checked"></use>
                                        </svg>
                                    </button>
                                    <button type="button" class="are-you-sure--no">
                                        <svg class="yes">
                                            <use xlink:href="sprite/sprite.svg#sprite-cross"></use>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="cart__delete">
                            <svg class="cart-item__delete">
                                <use xlink:href="sprite/sprite.svg#sprite-cancel"></use>
                            </svg>
                        </button>
                        <div class="cart-item__info">
                            <div class="cart-item__image-wrap">
                                <img class="cart-item__image" src="{{asset($item->image)}}" alt="">
                            </div>
                            <div class="cart-item__description">
                                <a href="#" class="item-title">
                                <span class="item-title__text">
                                    {{$item->name}}
                                </span>
                                    <span class="item-title__text">
                                    {{$item->desc}}
                                </span>
                                </a>
                                <div class="cart-item__price-for-piece">
                                    <span class="price-for-piece">1шт =</span>
                                    <div class="item-price--new">
                                        <div class="item-price--new--digits">
                                            {{$item->price_for_piece}}
                                        </div>
                                        грн.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="counter-total__wrapper">
                            <div class="cart-item__counter">
                                <button type="button" class="counter-button decrement">
                                    <svg class="counter-decrement">
                                        <use xlink:href="sprite/sprite.svg#sprite-minus"></use>
                                    </svg>
                                </button>
                                    <input type="text" name="asd" min="1" value="1" max="20" class="table-input">
                                <button type="button" class="counter-button increment">
                                    <svg class="counter-increment">
                                        <use xlink:href="sprite/sprite.svg#sprite-plus"></use>
                                    </svg>
                                </button>
                            </div>
                            <div class="cart-item__total-price">
                                <div class="item-price--new">
                                    <div class="item-price--new--digits">
                                        {{$item->price_for_piece}}
                                    </div>
                                    грн.
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="cart-empty">
                    <div class="cart-empty__text">
                        В данный момент в корзине нет товара
                    </div>
                </div>
                <div class="cart__lower">
                    <a href="#" class="path-link">Продолжить покупки</a>
                    <div class="total-price">
                        Общая сумма заказа:
                        <div class="item-price--new">
                            <div class="item-price--new--digits">
                                295 000
                            </div>
                            грн.
                        </div>
                    </div>
                    <button type="submit" class="button-buy button--gradient">
                        <span class="item-buy-button__text">
                            Оформить заказ
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>