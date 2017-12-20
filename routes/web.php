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
//Route::get('searching','Controller@searchData');
Route::post('inserting','Controller@getInsert');
Route::get('insertingp','Controller@getInsertP');
Route::get('itemmaster','Controller@getitemlist');
Route::get('employmaster','Controller@getemploylist');
Route::get('employinput','Controller@getemployinput');
Route::get('iteminput','Controller@getiteminput');
Route::get('deleting','Controller@getDelete');
Route::get('deletingp','Controller@getDeleteP');
Route::get('updating','Controller@getUpdate');
Route::get('updatingp','Controller@getUpdateP');
Route::get('login','Controller@Login')->name("login");
Route::get('auth','UserController@login')->name("auth");

Route::get('/gudang','Controller@getData');	
Route::get('/','Controller@getData');	
Route::get('/admin','Controller@viewWow')->name("admin");	
Route::post('/insert','Controller@insert');
Route::post('/searchresult','ResearchController@store');


