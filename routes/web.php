<?php
use RealRashid\SweetAlert\Facades\Alert;
Route::get('/', function () {
    return view('welcome');
});

Route::get('test',function() {
	
	return view('test');
});

//Route::post('submit','TestController@store');

Route::get('/', 'DropzoneFileUploadController@index');
Route::post('save','DropzoneFileUploadController@imageUpload');
 
// Route::post('save', 'DropzoneFileUploadController@uploadImages');
 
// Route::post('delete', 'DropzoneFileUploadController@deleteImage');