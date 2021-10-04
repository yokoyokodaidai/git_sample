<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

// 認証が必要な物はこの中へ
Route::middleware('auth')->group(function () {
    // ルーティングも実装したAPIに書き換える
    Route::get('/test', 'TestController@test');
    Route::get('test/getS3Url', 'TestController@getS3Url')->name('test/getS3Url');
});

Route::get('s3/presignedurl', 'S3ClientController@getPresignedUrl')->name('s3.getPresignedUrl');


Route::post('test/s3UploadTest', 'TestController@s3UploadTest')->name('test/s3UploadTest');
