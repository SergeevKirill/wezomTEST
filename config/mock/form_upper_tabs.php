<?php

$data = [
    "tabs" => [
        [
            'id' => '1',
            'active_class' => 'is-active',
            'name' => 'Ссылка 1',
            'image_path' => 'sprite/sprite.svg#sprite-link1'
        ],
        [
            'id' => '2',
            'active_class' => '',
            'name' => 'Ссылка 2',
            'image_path' => 'sprite/sprite.svg#sprite-link2'
        ],
        [
            'id' => '3',
            'active_class' => '',
            'name' => 'Ссылка 3',
            'image_path' => 'sprite/sprite.svg#sprite-link3'
        ],
        [
            'id' => '4',
            'active_class' => '',
            'name' => 'Ссылка 4',
            'image_path' => 'sprite/sprite.svg#sprite-link4'
        ],
        [
            'id' => '5',
            'active_class' => '',
            'name' => 'Ссылка 5',
            'image_path' => 'sprite/sprite.svg#sprite-link5'
        ],
    ],
    "tab" => [
        [
            "is_active" => true,
            "title" => "Tab 1",
            "ws_button" => "1"
        ],
        [
            "is_active" => false,
            "title" => "Tab 2",
            "ws_button" => "2"
        ]
    ],
    "clear_button" => "Очистить фильтр",
    "apply_button" => "Применить фильтр"
];

return $data;