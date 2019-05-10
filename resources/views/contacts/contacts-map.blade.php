<div class="contacts-google-map__wrapper">
    <div class="contacts-google-map__button-wrapper">
        @foreach($mock->contacts_data-> maps->buttons as $button)
            <button data-options='{"address_local": "{{$button->address_local}}", "address_country": "{{$button->address_country}}", "target": "{{$button->target}}", "lng": "{{$button->lng}}", "lat": "{{$button->lat}}"}' data-wstabs-ns="{{$mock->contacts_data-> maps->group}}" data-wstabs-button="{{$button->ws_button}}" type="button" class="contacts-google-map__button my-button js-google-map-change-destination">{{$button->title}}</button>
        @endforeach
    </div>
    <div class="contacts-google-map__container">
        <div id="map1" class="contacts-google-map js-google-map"></div>
        <button type="button" class="js-reset-map contacts-google-map__reset-map-button">{{$mock->contacts_data->maps->clear_title}}</button>
    </div>
</div>