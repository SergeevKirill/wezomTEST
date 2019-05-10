<?php

$data = [
    "page_title" => "Контакты",
    "contact_blocks" => [
        [
            "title" => "Контактные телефоны",
            "type" => "phone",
            "data" => [
                "+380 98 170 00 740",
                "+380 98 170 00 740"
            ]
        ],
        [
            "title" => "Наш адрес",
            "type" => "address",
            "data" => [
                "04655 Украина,",
                "г. Киев, Оболонский р-н, ул. Корабельная, 5"
            ]
        ],
        [
            "title" => "Другие контакты",
            "type" => "social-media",
            "data" => [
                "facebook", "twitter", "google"
            ]
        ]
    ],
    "maps" => [
        "group" => "group-m",
        "clear_title" => "Назад",
        "buttons" => [
            [
                "title" => "Киев",
                "ws_button" => "1",
                "lng" => "30.493061",
                "lat" => "50.459042",
                "target" => "markerKiev",
                "address_country" => "04655 Украина",
                "address_local" => "г. Киев, Оболонский р-н, ул. Корабельная, 5"
            ],
            [
                "title" => "Херсон",
                "ws_button" => "2",
                "lng" => "32.639646",
                "lat" => "46.667597",
                "target" => "markerKherson",
                "address_country" => "73015 Украина",
                "address_local" => "г.Херсон Днепровский р-н, ул. Покрышева 15"
            ],
            [
                "title" => "Львов",
                "ws_button" => "3",
                "lng" => "24.023582",
                "lat" => "49.835988",
                "target" => "markerLvov",
                "address_country" => "79001 Украина",
                "address_local" => "г. Львов, Франковский р-н, ул. Коперника 55"
            ]
        ]
    ]
];

return $data;