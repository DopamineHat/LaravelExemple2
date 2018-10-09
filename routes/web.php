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

Route::get('/framework', function () {
    return view('welcome');
});

Route::get('/create', function () {
    return view('create');
});

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/premium', 'PremiumController@access')->name('premium')->middleware('auth')->middleware('is_admin');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/{user}/destroy', 'UserController@destroyForm')->middleware('auth')->middleware('is_admin');
Route::get('/premium/credit', 'OpenController@updateCredit')->middleware('auth');
Route::resource('/users', 'UserController')->middleware('auth')->middleware('is_admin');
Route::get('/users_list', 'UserController@list')->name('users_list')->middleware('auth');
Route::get('/users_all', 'UserController@all')->name('users_all')->middleware('auth')->middleware('is_admin');
Route::get('/delete_user_by_id', 'UserController@delbyid')->name('delete_byid')->middleware('auth')->middleware('is_admin');
Route::get('/edit_user_by_id', 'UserController@edibyid')->name('edit_byid')->middleware('auth')->middleware('is_admin');
Route::get('/profile', 'UserController@own')->name('profile')->middleware('auth');
Route::get('/edit_own', 'OpenController@edit_own')->name('edit_own')->middleware('auth');
Route::post('/edit_own/update', 'OpenController@openUpdate')->name('update_own')->middleware('auth');


