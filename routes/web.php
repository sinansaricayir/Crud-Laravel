<?php

use Illuminate\Support\Facades\Route;



Route::get('/','indexController@index')->name('index');

Route::get('/add','indexController@add')->name('add');

Route::post('/add','indexController@addpost')->name('addpost');

Route::get('/edit/{id}','indexController@edit')->name('edit');

Route::post('/edit/{id}','indexController@editpost')->name('editpost');

Route::get('/delete/{id}','indexController@delete')->name('delete');

