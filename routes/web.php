<?php

Route::get('/', function () {
    return view('welcome');
});


Route::get('/quick_search', 'HomeController@index')->name('search.quick');
