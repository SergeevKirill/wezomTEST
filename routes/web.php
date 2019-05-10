<?php

$mock = json_decode(json_encode(config('mock')), FALSE);


Route::get('laravel', function () {
    return view('welcome');
});

Route::get('/', function () use($mock) {
    return view('index', [
        'mock' => $mock
    ]);
});

Route::get('item', function () use($mock) {
    return view('item', [
        'mock' => $mock
    ]);
});

Route::get('catalog', function () use($mock) {
    return view('catalog', [
        'mock' => $mock
    ]);
});

Route::get('contacts', function () use($mock) {
    return view('contacts/index', [
        'mock' => $mock
    ]);
});
