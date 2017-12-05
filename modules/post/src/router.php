<?php
/**
 * Created by PhpStorm.
 * User: n0m4dz
 * Date: 12/5/17
 * Time: 11:37
 */

Route::group([
    'prefix'    => 'post',
    'namespace' => 'Railway\Post\Controllers'
], function () {
    Route::get('/', 'PostController@index');
    Route::get('get', 'PostController@getPosts');
    Route::post('store', 'PostController@store');
});