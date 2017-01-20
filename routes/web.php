<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | This file is where you may define all of the routes that are handled
  | by your application. Just tell Laravel the URIs it should respond
  | to using a Closure or controller method. Build something great!
  |
 */

Route::get('/', 'PagesController@home');

//Auth::routes();

//Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'auth'], function () {
    Route::get('register', ['as' => 'get_register', 'uses' => 'Auth\AuthController@getRegister']);
    Route::post('register', ['as' => 'post_register', 'uses' => 'Auth\AuthController@postRegister']);
});
