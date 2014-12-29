<?php

//Route::get('/','PagesController@home');

//Route::get('/about','PagesController@about');

//Route::get('users','UserController@index');

//Route::get('users/{username}','UserController@show');

//Route::get('users/create','UserController@create');

Route::resource('users','UserController');

?>