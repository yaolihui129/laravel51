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

// 认证路由...
Route::match(['get','post'],'auth/login', 'Auth\AuthController@getLogin');
//Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
// 注册路由...
Route::match(['get','post'],'auth/register', 'Auth\AuthController@getRegister');
//Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::group(['as'=>'test::'],function (){
    Route::match(['get','post'],'Test/teacher/{teacher}/edit','Test\TeacherController@edit')
        ->where('teacher','[0-9]+');
    Route::match(['get','post'],'Test/teacher/create','Test\TeacherController@create');
    Route::get('Test/teacher', 'Test\TeacherController@index');
    Route::get('Test/teacher/{teacher}/del','Test\TeacherController@destroy')->where('teacher','[0-9]+');
    Route::get('Test/teacher/{teacher}','Test\TeacherController@show')->where('teacher','[0-9]+');


});

