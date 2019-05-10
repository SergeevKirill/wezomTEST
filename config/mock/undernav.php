<?php

$data = [
    "contacts" => [
        "phone_numbers" => [
            "+380 98 170 00 740",
            "+380 98 170 00 740"
        ],
        "button_text" => "Перезвонить мне"
    ],
    "buttons" => [
        [
            "image" => "compare",
            "title" => "Сравнение"
        ],
        [
            "image" => "favourite",
            "title" => "Избранное"
        ],
        [
            "image" => "cart",
            "title" => "Корзина"
        ]
    ],
    "bottom_buttons" => [
        [
            "image" => "compare",
            "popup" => false
        ],
        [
            "image" => "favourite",
            "popup" => false
        ],
        [
            "image" => "cart",
            "src" => "#cart",
            "effect" => "mfp-fadeout",
            "popup" => true
        ],
        [
            "image" => "call2",
            "src" => "#call_me_back",
            "effect" => "mfp-fadeout",
            "popup" => true
        ]
    ]
];

return $data;