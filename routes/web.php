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
| NOTICE!
| This is for view route
|
*/

Route::get('/', function () {
    return view('index');
});
Route::post('/document', array('uses' => 'StoreController@convert'));
