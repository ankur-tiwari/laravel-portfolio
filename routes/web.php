<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'PagesController@about');
Route::post('/', 'PagesController@postAbout');

Route::get('my-work', 'PagesController@my_work');

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('about', 'PagesController@about');

//Route::get('fuck', function () {
//    return 'fuck you';
//});

//Route::get('test-page', 'PagesController@test');
