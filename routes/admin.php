<?php
Route::get('/','HomeController@index')->name('dashboard');
Route::get('/author','AuthorController@index')->name('author');
Route::get('/author/create','AuthorController@create')->name('author/create');
Route::post('/author','AuthorController@store')->name('author/store');
Route::get('/author/data','DataController@Authors')->name('author/data');