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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login',['uses'=>'Api\Auth\LoginController@login','as'=>'api.login']);

Route::get('/posts', ['uses'=>'Api\Auth\PostsController@showAll', 'as'=>'posts']);
Route::get('/post/{post}', ['uses'=>'Api\Auth\PostsController@showOne', 'as'=>'post']);