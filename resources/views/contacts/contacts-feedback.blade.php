<div class="map__wrapper">
    <div class="contacts-feedback__wrapper">
        <h2 class="contacts-feedback__title">
            {{$mock->contacts_feedback->title}}
        </h2>
        <form action="feedback.php" class="js-form-validate">
            @foreach($mock->contacts_feedback->inputs as $form_item)
                @if($form_item->input === "textarea")
                    <div class="contacts-feedback__wrapper--textarea">
                        <label for="{{$form_item->id}}" class="contacts-feedback__label">
                            {{$form_item->label}}
                        </label>
                        <div class="error-wrapper">
                            <textarea data-rule-required="true" data-msg-required="Это поле обязательно " data-rule-minlength="10" data-rule-max-length="200" data-msg-minlength="Минимальное количество символов -{0}" data-msg-maxlength="Максимальное количество символов - {0}" name="{{$form_item -> id}}" id="{{$form_item -> id}}" cols="30" rows="5" placeholder="{{$form_item->placeholder}}" class="contacts-feedback__textarea"></textarea>
                        </div>
                    </div>
                @elseif($form_item->input ==="name")
                    <div class="contacts-feedback__wrapper--input">
                        <label for="{{$form_item->id}}" class="contacts-feedback__label">
                            {{$form_item->label}}
                        </label>
                        <div class="error-wrapper">
                            <input data-rule-required="true" data-msg-required="Это поле обязательно " type="text" id="{{$form_item -> id}}" name="{{$form_item -> id}}" class="contacts-feedback__input" placeholder="{{$form_item->placeholder}}">
                        </div>
                    </div>
                @elseif($form_item->input ==="email")
                    <div class="contacts-feedback__wrapper--input">
                        <label for="{{$form_item->id}}" class="contacts-feedback__label">
                            {{$form_item->label}}
                        </label>
                        <div class="error-wrapper">
                            <input data-rule-required="true" data-msg-required="Введите корректный email адрес" data-rule-email="true" data-msg-email="Введите корректный email адрес" type="text" id="{{$form_item -> id}}" name="{{$form_item -> id}}" class="contacts-feedback__input" placeholder="{{$form_item->placeholder}}">
                        </div>
                    </div>
                @endif
            @endforeach
            <button type="submit" class="comment-submit-button">
                {{$mock->contacts_feedback->button_text}}
            </button>
        </form>
    </div>
    @include('contacts/contacts-map')
</div>