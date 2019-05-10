<?php

$data = [
    "title" => "Обратная связь",
    "button_text" => "Отправить сообщение",
    "inputs" => [
        [
            "label" => "Ваше имя",
            "input" => "name",
            "id" => "contacts-name",
            "placeholder" => "Михаил"
        ],
        [
            "label" => "Контактный email",
            "input" => "email",
            "id" => "contacts-email",
            "placeholder" => "mikel87@gmail.com"
        ],
        [
            "label" => "Ваш отзыв",
            "input" => "textarea",
            "id" => "contacts-textarea",
            "placeholder" => "Оставьте свой отзыв"
        ],
    ]
];

return $data;