<?php

/**
 * Home
 */
Route::get('/', [
    'uses'  => '\Mitschool\Http\Controllers\HomeController@index',
    'as'    => 'home',
]);

/**
 * Auth
 */
Route::get('/daftar', [
    'uses'  => '\Mitschool\Http\Controllers\AuthController@getSignup',
    'as'    => 'signup',
]);

Route::post('/daftar', [
    'uses'  => '\Mitschool\Http\Controllers\AuthController@postSignup',
]);

/**
 * Task
 */
Route::get('/tugas', [
    'uses'  => '\Mitschool\Http\Controllers\TaskController@index',
    'as'    => 'tugas',
]);

Route::get('/tugas/tambah', [
    'uses'  => '\Mitschool\Http\Controllers\TaskController@getAdd',
    'as'    => 'tambah.tugas',
]);

Route::post('/tugas/tambah', [
    'uses'  => '\Mitschool\Http\Controllers\TaskController@postAdd',
    'as'    => 'tambah.tugas.post',
]);


/**
 * Blog
 */
Route::get('/blog', [
    'uses'  => '\Mitschool\Http\Controllers\BlogController@index',
    'as'    => 'blog',
]);

Route::get('/blog/add', [
    'uses'  => '\Mitschool\Http\Controllers\BlogController@getAdd',
    'as'    => 'tambah.blog',
]);

Route::post('/blog/add', [
    'uses'  => '\Mitschool\Http\Controllers\BlogController@postAdd',
    'as'    => 'tambah.blog.post',
]);