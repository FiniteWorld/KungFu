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
Route::get('/studentRegister', 'PagesController@stu_reg');
Route::get('/parentRegister', 'PagesController@par_reg');
Route::get('/promote', 'PagesController@promote');
Route::get('/fees', 'PagesController@fee');
Route::get('/products', 'PagesController@product');
Route::get('/search', 'PagesController@search');