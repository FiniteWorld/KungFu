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
Route::resource('registerStudents','Stu_register');
Route::resource('registerParent','Parent_register');
Route::put('/registerParent','Parent_register@update2');
Route::get('/registerP2S','PagesController@par_reg');
Route::put('/registerP2S','Parent_register@store');
Route::get('/promote','PagesController@promote');
Route::put('promote','Stu_register@update2');
Route::get('/search','PagesController@search');
Route::put('search','PagesController@q');
Route::get('/fees', 'PagesController@fee');
Route::post('fees','FeesController@store');

Route::get('/attendance','PagesController@attendance');
Route::post('attendance','FeesController@attendance');

//Route::get('/products', 'PagesController@product');
//Route::get('/search', 'PagesController@search');
//Route::get('/search/q', 'PagesController@q');
//Route::post('/registerStudents','Stu_register@update2');
//Route::get('/attendance', 'PagesController@attendance');
//Route::post('/fees','FeesController@store');
//#Route::post('/fees/update_rank', 'FeesController@update_rank');
//Route::post('/attendance', 'FeesController@store2');
//#Route::post('/register','FeesController@update_Parent');
//Route::post('/registerStudent','FeesController@update_rank');
//Route::get('/registerParent/create','Parent_register@create');
//Route::put('/registerParent/create','Parent_register@update2' );
//
//Route::resource('registerStudents','Stu_register');
//
//Route::get('/registerP2S','PagesController@par_reg');