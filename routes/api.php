<?php

use Illuminate\Http\Request;

Route::post("allbarang","ApiController@getAllBarang");
Route::post("allpegawai","ApiController@getAllPegawai");
Route::post("allmember","ApiController@getAllMember");
Route::post("allhjual","ApiController@getAllHjual");
Route::post("alldjual","ApiController@getAllDjual");
Route::post("searchbarang","ApiController@searchBarang");
Route::post("insertbarang","ApiController@insertBarang");
Route::post("insertpegawai","ApiController@insertPegawai");
Route::post("insertmember","ApiController@insertMember");
Route::post("inserthjual","ApiController@insertHjual");
Route::post("insertdjual","ApiController@insertDjual");
Route::post("updatebarang","ApiController@updateBarang");
Route::post("updatepegawai","ApiController@updatePegawai");
Route::post("updatemember","ApiController@updateMember");
Route::post("updatehjual","ApiController@updateHjual");
Route::post("updatedjual","ApiController@updateDjual");
