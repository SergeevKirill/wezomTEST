$(function() {
    if($('.js-google-map')[0]) {
        let map;

        let mapChangeButton = $('.js-google-map-change-destination');
        let resetButton = $('.js-reset-map');

        function initMap() {
            map = new google.maps.Map($('.js-google-map')[0], {
                center: {lat : 50.459042, lng: 30.493061},
                zoom: 8,
                disableDefaultUI: true
            });

            let markers = [];
            let i = 0;

            mapChangeButton.each(function() {
                let $this = $(this);
                let options = $this.data('options');

                let coordinates = {lat: parseFloat(options.lat), lng: parseFloat(options.lng)};
                let infoWindow = new google.maps.InfoWindow();
                i++;

                let marker = new google.maps.Marker({
                    position: coordinates,
                    map: map,
                    icon: '../static/img/map-mark.png'
                });

                marker.metadata = {id: i};

                google.maps.event.addListener(marker, 'click', function() {
                    map.setZoom(17);
                    map.setCenter(marker.getPosition());

                    let address = options.address_country+"<br>"+options.address_local;
                    infoWindow.setContent(address);
                    infoWindow.open(map, marker);

                    let markerId = marker.metadata.id;
                    mapChangeButton.removeClass('is-active');
                    mapChangeButton.eq(markerId - 1).addClass('is-active');
                });
                markers.push(marker);
            });

            let bounds = new google.maps.LatLngBounds();
            for(let i = 0; i< markers.length; i++) {
                bounds.extend(markers[i].getPosition());
            }

            map.fitBounds(bounds);

            $(resetButton).on('click', function() {
                map.fitBounds(bounds);
                mapChangeButton.removeClass('is-active');
            });
        }

        initMap();

        mapChangeButton.click(function initMap() {
            let $this = $(this);

            options = $this.data('options');

            coordinates = {lat: parseFloat(options.lat), lng: parseFloat(options.lng)};

            map.setCenter(coordinates);

            map.setZoom(17);
        });
    }
});