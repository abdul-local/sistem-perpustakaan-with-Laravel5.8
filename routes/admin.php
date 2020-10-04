<?php
// untuk AutoController
Route::get('/','HomeController@index')->name('dashboard');

Route::get('/author','AuthorController@index')->name('author');

Route::get('/author/{author}/edit','AuthorController@edit')->name('author/edit');

Route::put('/author/{author}','AuthorController@update')->name('author/update');

Route::delete('/author/{author}','AuthorController@destroy')->name('author/destroy');

Route::get('/author/create','AuthorController@create')->name('author/create');

Route::post('/author','AuthorController@store')->name('author/store');

//untuk BookController

Route::get('/book','BookController@index')->name('book');

Route::get('/book/{book}/edit','BookController@edit')->name('book/edit');

Route::put('/book/{book}','BookController@update')->name('book/update');

Route::delete('/book/{book}','BookController@destroy')->name('book/destroy');

Route::get('/book/create','BookController@create')->name('book/create');

Route::post('/book','BookController@store')->name('book/store');

Route::get('/borrow','BorrowController@index')->name('borrow');

Route::put('/borrow/{borrowHistory}/return','BorrowController@returnbook')->name('borrow/return');

Route::get('/author/data','DataController@Authors')->name('author/data');

Route::get('/book/data','DataController@Books')->name('book/data');

Route::get('/borrow/data','DataController@borrow')->name('borrow/data');

// Route::resource('author','AuthorController');