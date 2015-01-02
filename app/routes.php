<?php

//Route::get('/','PagesController@home');

Route::get('contact','PagesController@contact')->before('auth');

Route::get('/about','PagesController@about');

//Route::get('users','UserController@index');

//Route::get('users/{username}','UserController@show');

//Route::get('users/create','UserController@create');

Route::resource('users','UserController');

Route::get('admin',function()
{
    return 'Admin page.';
})->before('auth');

Route::resource('sessions','SessionsController');

Route::get('login','SessionsController@create');

Route::get('logout','SessionsController@destroy');

?>