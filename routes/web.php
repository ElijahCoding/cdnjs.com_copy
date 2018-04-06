<?php

Route::get('/', function () {
    return view('welcome');
});


Route::get('/quick_search', 'HomeController@index')->name('search.quick');

Route::get('/advance_search', 'AdvanceSearchController@index')->name('search.advance');
