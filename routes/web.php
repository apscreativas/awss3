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

Route::get('/', function () {
    return view('welcome');
});

Route::get('aws-s3','S3ImageController@imageUpload');
Route::post('aws-s3','S3ImageController@imageUploadPost');

Route::get('upload_s3', function() {
    $file = public_path() . '/uploads/david.jpg';
    $upload = Storage::disk('s3')->put('david.jpg', file_get_contents($file), 'public');
});
