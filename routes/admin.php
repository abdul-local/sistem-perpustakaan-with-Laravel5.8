<?php
Route::get('/','HomeController@index')->name('dashboard');
Route::get('/author','AuthorController@index')->name('author');
Route::get('/author/data','DataController@Authors')->name('author/data');