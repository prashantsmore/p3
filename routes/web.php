<?php
/**
 * Misc. pages
 */

Route::get('/about', 'PageController@about');
Route::get('/contact', 'PageController@contact');

/**
 * Bill Splitter
 */

Route::get('/', 'BillSplitterController@create');
Route::post('/bill/calculate', 'BillSplitterController@calculate');

