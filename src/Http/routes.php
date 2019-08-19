<?php 

Route::get("/", 'SJunitController@index');
Route::post('/', 'SJunitController@store')->name('sjunit.store');

Route::get('test', 'TestController@index');
