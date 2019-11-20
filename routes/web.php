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

// Route::get('/', function () {
//     return view('welcome');
// });

// this is for employees
Route::get('/employees','EmployeesController@index');
Route::get('/employees/create','EmployeesController@create');
Route::post('/employees','EmployeesController@store');
Route::get('/employees/{id}/edit','EmployeesController@edit');

//this is for posts
Route::get('/posts','PostController@index');
Route::get('/posts/create','PostController@create');
Route::post('/posts','PostController@store');
Route::get('/posts/{id}/edit','PostController@edit');
//this is for comments
Route::get('/comments','CommentsController@index');
Route::get('/comments/create','CommentsController@create');
Route::get('/comments/{id}/edit','CommentsController@edit');
//this is for roles
Route::get('/roles','CommentsController@index');
Route::get('/roles/create','CommentsController@create');
Route::get('/roles/{id}/edit','CommentsController@edit');






