<?php
/**
 * Misc. pages
 */
Route::get('/', 'PageController@welcome');
Route::get('/about', 'PageController@about');
Route::get('/contact', 'PageController@contact');

/**
 * Bill Splitter
 */

Route::get('/bill', 'BillSplitterController@index');

Route::get('/bill/create', 'BillSplitterController@create');
Route::post('/bill/calculate', 'BillSplitterController@calculate');

