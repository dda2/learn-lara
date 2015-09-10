<?php

/**
 * Home
 */
Route::get('/', [
    'uses'  => '\Dda\Http\Controllers\HomeController@index',
    'as'    => 'home',
]);

/**
 * Auth
 */
Route::get('/daftar', [
    'uses'  => '\Dda\Http\Controllers\AuthController@getSignup',
    'as'    => 'signup',
]);

Route::post('/daftar', [
    'uses'  => '\Dda\Http\Controllers\AuthController@postSignup',
]);