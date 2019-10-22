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

Route::get('/', function() {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/courses', 'CourseController@index')->name('courses');

Route::get('/blog', 'BlogController@index')->name('blog');

Route::get('/about', 'AboutController@index')->name('about');

Route::get('/news', 'NewsController@index')->name('news');

Route::get('/chart', 'ChartController@index')->name('chart');

Route::get('/informasi', 'InformasiController@index')->name('informasi');
