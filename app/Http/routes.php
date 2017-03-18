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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/projects/Kenyan-elections-2017', 'ProjectController@show254Election');
Route::get('/projects/Kenyan-elections-2017-charts', 'ProjectController@show254ElectionCharts');
Route::get('/projects/Kenyan-elections-2017-word-cloud', 'ProjectController@getWordCloud');
Route::get('/projects/candidate-details/{id}', 'ProjectController@showCandidateDetails')
		->where('id', '[0-9]+');
Route::get('/projects/compare-candidates', 'ProjectController@compareCandidates');
Route::post('/compare-candidates', 'ProjectController@compareTwoCandidates');
