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
    'middleware' => ['guest']
]);

Route::post('/daftar', [
    'uses'  => '\Mitschool\Http\Controllers\AuthController@postSignup',
]);

Route::get('/masuk', [
    'uses'  => '\Mitschool\Http\Controllers\AuthController@getSignin',
    'as'    => 'signin',
    'middleware' => ['guest']
]);

Route::post('/masuk', [
    'uses'  => '\Mitschool\Http\Controllers\AuthController@postSignin',
    'as'    => 'signin.post'
]);

Route::get('/keluar', [
    'uses'  => '\Mitschool\Http\Controllers\AuthController@getSignout',
    'as'    => 'signout',
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

Route::get('/tugas/edit/{id}', [
    'uses'  => '\Mitschool\Http\Controllers\TaskController@getEdit',
    'as'    => 'edit.tugas',
]);

Route::patch('/tugas/edit/{id}', [
    'uses'  => '\Mitschool\Http\Controllers\TaskController@actEdit',
    'as'    => 'edit.tugas.post',
]);

Route::get('/tugas/delete/{id}', [
    'uses'  => '\Mitschool\Http\Controllers\TaskController@getDelete',
    'as'    => 'hapus.tugas',
]);

Route::delete('/tugas/delete/{id}', [
    'uses'  => '\Mitschool\Http\Controllers\TaskController@actDelete',
    'as'    => 'hapus.tugas.post',
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

Route::get('/blog/edit/{id}', [
    'uses'  => '\Mitschool\Http\Controllers\BlogController@getEdit',
    'as'    => 'edit.blog',
]);

Route::patch('/blog/edit/{id}', [
    'uses'  => '\Mitschool\Http\Controllers\BlogController@actEdit',
    'as'    => 'edit.blog.patch',
]);

Route::get('/blog/hapus/{id}', [
    'uses'  => '\Mitschool\Http\Controllers\BlogController@getDelete',
    'as'    => 'hapus.blog',
]);

Route::delete('/blog/hapus/{id}', [
    'uses'  => '\Mitschool\Http\Controllers\BlogController@actDelete',
    'as'    => 'hapus.blog.delete',
]);

/**
 * Gambar
 */
Route::get('/gambar', [
    'uses'  => '\Mitschool\Http\Controllers\UploadController@getIndex',
    'as'    => 'upload.gambar',
]);

Route::post('/gambar', [
    'uses'  => '\Mitschool\Http\Controllers\UploadController@postImage',
    'as'    => 'upload.gambar.post',
]);

/**
 * Profil
 */

Route::get('/profil', [
    'uses'  => '\Mitschool\Http\Controllers\ProfilController@getProfil',
    'as'    => 'profil.image',
]);

Route::post('/profil', [
    'uses'  => '\Mitschool\Http\Controllers\ProfilController@postAddImage',
    'as'    => 'profil.image.post',
]);