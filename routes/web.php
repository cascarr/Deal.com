
\<?php

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

Route::get('/home', 'HomeController@index');

//Route::post('/posts/{post}/comments', 'CommentController@store');

//Route::get('/posts/{post}', 'HomeController@show');





Auth::routes();



Route::get('post/like/{id}', ['as' => 'post.like', 'uses' => 'LikeController@likePost']);


Route::GET('/admin/home', 'AdminController@index');


Route::GET('/admin/qam', 'QamController@index');

Route::get('/admin/qam/add', 'QamController@create');

Route::get('/admin/qam/{id}', 'QamController@destroy');

Route::post('/admin/qam/store', 'QamController@store');

Route::get('/admin/qam/edit/{id}', 'QamController@edit');

Route::post('/admin/qam/update/{id}', 'QamController@updateCategory');




Route::GET('/admin/qac', 'QacController@index');


Route::GET('/admin/useri', 'PostController@index');

Route::get('/admin/useri/create', 'PostController@create');

Route::post('/posts', 'UseriController@store');

Route::get('/posts/{post}', 'UseriController@show');

Route::post('/posts/{post}/comments', 'UseriController@storeCom');


Route::GET('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');

Route::POST('admin', 'Admin\LoginController@login');

Route::POST('admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');

Route::GET('admin-password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');

Route::POST('admin-password/reset', 'Admin\ResetPasswordController@reset');

Route::GET('admin-password/reset/{ token }', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');


