<?php
/**
 * Misc. pages
 */

Route::get('/about', 'PageController@about');
Route::get('/contact', 'PageController@contact');

/**
 * Bill Splitter
 */

Route::get('/', 'BillSplitterController@getData');
Route::get('/bill/calculate', 'BillSplitterController@calculate');

