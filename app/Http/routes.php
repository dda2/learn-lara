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

/**
 * Task
 */
Route::get('/tugas', [
    'uses'  => '\Dda\Http\Controllers\TaskController@index',
    'as'    => 'tugas',
]);

Route::get('/tugas/tambah', [
    'uses'  => '\Dda\Http\Controllers\TaskController@getAdd',
    'as'    => 'tambah.tugas',
]);

Route::post('/tugas/tambah', [
    'uses'  => '\Dda\Http\Controllers\TaskController@postAdd',
    'as'    => 'tambah.tugas.post',
]);


/**
 * Blog
 */
Route::get('/blog', [
    'uses'  => '\Dda\Http\Controllers\BlogController@index',
    'as'    => 'blog',
]);

Route::get('/blog/add', [
    'uses'  => '\Dda\Http\Controllers\BlogController@getAdd',
    'as'    => 'tambah.blog',
]);

Route::post('/blog/add', [
    'uses'  => '\Dda\Http\Controllers\BlogController@postAdd',
    'as'    => 'tambah.blog.post',
]);