<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('posts/{id}', [
    'uses' => 'PostController@show',
    'as'   => 'post.show'
]);
