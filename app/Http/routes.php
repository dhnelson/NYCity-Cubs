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

Route::get('learning', [
	'as' => 'learning',
	'uses' => 'HomeController@learning'
]);

Route::get('responsabilities_cost', [
	'as' => 'responsabilities_cost',
	'uses' => 'HomeController@responsabilities_cost'
]);

Route::get('structure', [
	'as' => 'structure',
	'uses' => 'HomeController@structure'
]);

Route::get('contact', [
	'as' => 'contact',
	'uses' => 'HomeController@contact'
]);

Route::get('/download/{file}', [
	'as' => 'download',
	'uses' => 'DownloadsController@download'
]);
