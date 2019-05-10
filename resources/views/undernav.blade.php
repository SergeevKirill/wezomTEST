<section class="undernav centered content">
    <div class="undernav__container">
        <div class="undernav__logo">
            <img src="{{asset('static/img/logo.png')}}" alt="">
        </div>
        <div class="undernav-contacts">
            <div class="undernav-contacts__container">
                @foreach($mock->undernav->contacts->phone_numbers as $contact)
                    <div class="undernav-contacts__item">
                        {{$contact}}
                    </div>
                @endforeach
                <button data-mfp-src="#call_me_back" data-effect="mfp-fadeout" class="undernav-contacts-call-me-button button--medium button button--orange open">
                    <span class="undernav-contacts-call-me-button__container">
                        <svg class="button__icon">
                            <use xlink:href="sprite/sprite.svg#sprite-call"></use>
                        </svg>
                        <span>{{$mock->undernav->contacts->button_text}}</span>
                    </span>
                </button>
            </div>
        </div>
        <div class="undernav-button__container">
            @foreach($mock->undernav->buttons as $button)
                @if($loop->last)
                    <button data-mfp-src="#cart" data-effect="mfp-fadeout" class="button--control cart-open open">
                        <svg>
                            <use xlink:href="sprite/sprite.svg#sprite-{{$button->image}}"></use>
                        </svg>
                        <span>
                            {{$button->title}}
                        </span>
                    </button>
                @else
                    <button class="button--control">
                        <svg>
                            <use xlink:href="sprite/sprite.svg#sprite-{{$button->image}}"></use>
                        </svg>
                        <span>
                            {{$button->title}}
                        </span>
                    </button>
                @endif
            @endforeach
        </div>
    </div>
    <div class="bottom-button-menu bottom-menu">
        <div class="bottom-button__container">
            @foreach($mock->undernav->bottom_buttons as $bottom_button)
                @if($bottom_button->popup === false)
                    <button class="bottom-button">
                        <svg class="bottom-button__image">
                            <use xlink:href="sprite/sprite.svg#sprite-{{$bottom_button->image}}"></use>
                        </svg>
                    </button>
                @else
                    <button data-mfp-src="{{$bottom_button->src}}" data-effect="{{$bottom_button->effect}}" class="bottom-button open">
                        <svg class="bottom-button__image">
                            <use xlink:href="sprite/sprite.svg#sprite-{{$bottom_button->image}}"></use>
                        </svg>
                    </button>
                @endif
            @endforeach
        </div>
    </div>

</section>