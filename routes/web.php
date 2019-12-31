<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Frontend\PagesController@index')->name('Fight Christian Persecution');

Route::get('know-christ', 'Frontend\PagesController@know_christ')->name('Know Christ');

Route::get('persecution-of-christians', 'Frontend\PagesController@persecution_of_christians')->name('Christian Persecution by the Numbers');

Route::get('donate-to-fight-christian-discrimination', 'Frontend\PagesController@donate')->name('Dangerous to Believe');
