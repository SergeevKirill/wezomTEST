<section id="reviews" class="item-tabs__wrapper centered content">
    <div class="item-tabs-button__wrapper">
        @foreach($mock->item_tabs as $button)
            <button data-wstabs-ns="group-h" data-wstabs-button="{{$button->id}}" class="item-tabs-button my-button {{$button->active_class}}">
                {{$button->text}}
            </button>
        @endforeach
    </div>
    <div class="item-tabs__description my-block is-active" data-wstabs-ns="group-h" data-wstabs-block="1">
        @foreach($mock->text_tab as $tab)
            <div class="description__text">
                <p class="text__item">{{$tab->content->text1}} <br></p>
                <img src="{{asset('static/img/description.png')}}" class="description__image" alt="">
                <p class="text__item">{{$tab->content->text2}} <br></p>
                <p class="text__item">{{$tab->content->text3}} <br></p>
            </div>
        @endforeach
    </div>
    <div class="item-tabs__offer my-block" data-wstabs-ns="group-h" data-wstabs-block="2">
        <table class="offer__table">
            @foreach($mock->offer_tab as $tab)
                <tr class="offer__table--head">
                    @foreach($tab->content->table_head as $item)
                        <th>{{$item}}</th>
                    @endforeach
                </tr>
                @foreach($tab->content->rows as $row)
                    <tr>
                        <td class="table-title">
                            <a href="#" class="item-title item-title__text">
                                <span class="table-title__item">
                                    {{$row->title}}
                                </span>
                                <span class="table-title__item">
                                    {{$row->desc}}
                                </span>
                            </a>
                        </td>
                        <td class="table-size">
                            {{$row->size}}
                        </td>
                        <td class="table-index">{{$row->index}}</td>
                        <td class="table-quantity"><input type="number" class="table-input price-change" min="1" placeholder="1" max="10"> шт.</td>
                        <td class="table-price">
                            <div class="item-price--new">
                                <span class="item-price--new--digits price">
                                9 570
                                </span>
                                грн.
                            </div>
                        </td>
                        <td class="table-buy">
                            <div class="item__buy-button-wrapper">
                                <button class="button-buy button--gradient">
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
                        </td>
                    </tr>
                @endforeach
            @endforeach
        </table>
    </div>
    <div class="item-tabs__comments my-block" data-wstabs-ns="group-h" data-wstabs-block="3">
        <div class="comments__wrapper">
            <div class="comments__container">
                @foreach($mock->comments as $comment)
                    <div class="comment__item">
                        <div class="comment__head">
                            <div class="comment__author">
                                {{$comment->author}}
                            </div>
                            <div class="comment__date">
                                {{$comment->date}}
                            </div>
                        </div>
                        <div class="comment__rating">
                            @for($i=0; $i<5; $i++)
                                @if($i<$comment->rate)
                                    <svg class="active-star">
                                        <use xlink:href="sprite/sprite.svg#sprite-star"></use>
                                    </svg>
                                @else
                                    <svg class="inactive-star">
                                        <use xlink:href="sprite/sprite.svg#sprite-star"></use>
                                    </svg>
                                @endif
                            @endfor
                            Оценка {{$comment->rate}}
                        </div>
                        <div class="comment__text">
                            {{$comment->comment}}
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="comment__feedback">
                <div class="leave-a-comment">
                    <h1 class="leave-a-comment__title">
                        Оставить отзыв
                    </h1>
                    <form action="test.php" class="js-form-validate">
                        <div class="comment-row">
                            <div class="comment-input__wrapper">
                                <label for="comment_name" class="comment-label">Ваше имя</label>
                                <input data-rule-required="true" data-msg-required="Это поле обязательно" data-rule-minlength="2" data-msg-minlength="Минимальное количество символов - {0}" type="text" name="comment_name" id="comment_name" class="comment-input" placeholder="Михаил">
                            </div>
                            <div class="comment-input__wrapper">
                                <label for="comment_email" class="comment-label">Контактный email</label>
                                <input data-rule-email="true" data-msg-email="Введите корректный email aдрес" data-rule-required="true" data-msg-required="Это поле обязательно" type="email" name="comment_email" id="comment_email" class="comment-input" placeholder="mikel87@gmail.com">
                            </div>
                            <div class="your-rating__wrapper">
                                <span class="comment-label">Оценка товара</span>
                                <div class="your-rating">
                                    @for($i=0; $i<5; $i++)
                                        <svg class="comment-star">
                                            <use xlink:href="sprite/sprite.svg#sprite-star"></use>
                                        </svg>
                                    @endfor
                                    <input type="hidden" class="input-stars">
                                </div>
                            </div>
                        </div>
                        <div class="comment-row">
                            <div class="flex-column">
                                <label for="comment_textarea" class="comment-textarea-label">Ваш отзыв</label>
                                <textarea placeholder="Оставьте свой отзыв" data-rule-maxlength="400" data-msg-maxlength="Максимальное количество символов - {0}" data-rule-minlength="10" data-msg-minlength="Минимальное количество символов - {0}" data-rule-required="true" data-msg-required="Это поле обязательно" name="comment" id="comment_textarea" rows="4" class="comment__textarea"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="comment-submit-button">
                            Написать отзыв
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="item-tabs__guarantee my-block" data-wstabs-ns="group-h" data-wstabs-block="4">
        <div class="guarantee__wrapper">
            @foreach($mock->guarantees as $guarantee)
                <div class="guarantee__item">
                    <p>{{$guarantee}}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>