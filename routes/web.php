<?php

Route::get('/games', 'GamesController@index');

Route::get('/games/create', 'GamesController@create');

Route::get('/games/{game}', 'GamesController@show');

Route::post('/games', 'GamesController@store');

Route::post('/games/{game}/reviews', 'ReviewsController@store');

Route::get('/register', 'RegistrationController@create');
Route::post('register', 'RegistrationController@login');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@login');
Route::get('/logout', 'SessionsController@destroy'); 
 
 
 
 

