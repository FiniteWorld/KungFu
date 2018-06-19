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
    return view('pages.main');
});
Route::get('/', 'PagesController@index');
Route::get('/fees', 'PagesController@fee');
Route::get('/products', 'PagesController@product');
Route::get('/search', 'PagesController@search');
Route::get('/attendance', 'PagesController@attendance');
Route::post('/fees','FeesController@store');
Route::post('/attendance', 'FeesController@store2');
#Route::post('/register','FeesController@update_Parent');
Route::get('/registerParent/create','Parent_register@create');
Route::put('/registerParent/create','Parent_register@update2' );
Route::resource('registerStudents','Stu_register');
Route::resource('registerParent','Parent_register');
Route::get('/registerP2S','PagesController@par_reg');