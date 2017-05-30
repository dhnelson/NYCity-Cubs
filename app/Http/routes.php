<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|*************
| GET Routes *
|*************
*/

Route::get('/', [
	'as' => 'home',
	'uses' => 'HomeController@home'
]);

Route::get('responsibilities_cost', [
	'as' => 'responsibilities_cost',
	'uses' => 'HomeController@responsibilities_cost'
]);

Route::get('details', [
	'as' => 'details',
	'uses' => 'HomeController@details'
]);

Route::get('contact', [
	'as' => 'contact',
	'uses' => 'HomeController@contact'
]);

Route::get('/download/{file}', [
	'as' => 'download',
	'uses' => 'DownloadsController@download'
]);
