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


Auth::routes();



Route::group(['middleware'=>'auth'],function (){
    Route::get('/','indexController@index');
    Route::get('/getusers','indexController@get');
    Route::post('/save','indexController@save');
    Route::post('/Upload/File','indexController@upload');
    Route::put('/user/update/{id}','indexController@updateUser');
});
