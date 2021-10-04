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

/*Route::get('/', function () {
    return view('index');
});*/

Auth::routes();

// 認証が必要な物はこの中へ
Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'test_middle'], function () {
        Route::group(['prefix' => '{company_code}'], function () {
            Route::get('/admin', 'AdminController@index')->name('admin');
            Route::get('/admin/appli/list', 'AppliController@list')->name('admin/appli/list');
            Route::get('/admin/appli/add', 'AppliController@add')->name('admin/appli/add');
            Route::get('/admin/appli/analytics', 'AppliController@analytics')->name('admin/appli/analytics');
            Route::get('/admin/appli/capture', 'AppliController@capture')->name('admin/appli/capture');
            Route::get('/admin/appli/edit', 'AppliController@edit')->name('admin/appli/edit');
            Route::get('/admin/appli/folder', 'AppliController@folder')->name('admin/appli/folder');
            Route::get('/admin/appli/index', 'AppliController@index')->name('admin/appli/index');

            Route::get('/admin/appli/setting', 'AppliController@setting')->name('admin/appli/setting');

            Route::get('/admin/appli/make', 'AppliController@make')->name('admin/appli/make');
            Route::get('/admin/appli/template', 'AppliController@template')->name('admin/appli/template');

            Route::get('/admin/log/appli', 'LogController@appli')->name('admin/log/appli');
            Route::get('/admin/log/user', 'LogController@user')->name('admin/log/user');
            Route::get('/admin/log/appli_user', 'LogController@appli_user')->name('admin/log/appli_user');
            Route::get('/admin/log/user_appli', 'LogController@user_appli')->name('admin/log/user_appli');

            Route::get('/admin/user/analytics', 'UserController@analytics')->name('admin/user/analytics');
            Route::get('/admin/user/info', 'UserController@info')->name('admin/user/info');
            Route::get('/admin/user/list', 'UserController@list')->name('admin/user/list');
            Route::get('/admin/user/regist', 'UserController@regist')->name('admin/user/regist');
        });
    });
});

Route::get('/', 'TopController@index')->name('index');

// 検証用
Route::get('/test/file_up_test', 'TestController@fileUpTest')->name('test/file_up_test');

Route::get('/home', 'HomeController@index')->name('home');
