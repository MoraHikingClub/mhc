<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::post('auth/signin', 'UserController@api_SignIn');
Route::post('auth/signup', 'UserController@api_SignUp');
Route::get('auth/signout', 'UserController@api_SignOut');

Route::middleware('auth:api')->get('/user', 'UserController@api_User');
Route::middleware('auth:api')->get('/refresh', 'UserController@api_Refresh');

Route::middleware('auth:api')->get('/posts', 'PostController@api_index');
Route::middleware('auth:api')->get('/posts/{id}', 'PostController@api_show');

Route::middleware('auth:api')->get('/news', 'PostController@api_news');
Route::middleware('auth:api')->get('/news/{id}', 'PostController@api_news_show');