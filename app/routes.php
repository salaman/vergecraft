<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@getIndex');
Route::get('oldworld', 'HomeController@getOldWorld');
Route::get('rules', 'HomeController@getRules');
Route::get('guide', 'HomeController@getGuide');
Route::get('map', 'HomeController@getMap');
Route::get('staff', 'HomeController@getStaff');
