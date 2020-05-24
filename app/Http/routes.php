<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/provinces', 'ProvincesController@index');
Route::get('/provinces/{province}', 'ProvincesController@show');
