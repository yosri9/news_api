<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
/**
 * @User Related
 */
Route::get('authors', 'Api\UserController@index');
Route::get('authors/{id}', 'Api\UserController@show');
Route::get('posts/author/{id}', 'Api\UserController@posts');
Route::get('comments/author/{id}', 'Api\UserController@comments');

//End User Related

/**
 * @Post related
 */
Route::get('categories', 'Api\CategoryController@index');
Route::get('categories/{id}', 'Api\CategoryController@posts');
Route::get('posts', 'Api\PostController@index');
Route::get('posts/{id}', 'Api\PostController@show');
Route::get('comments/posts/{id}', 'Api\postController@comments');
//End Post Related
Route::post('register', 'Api\UserController@store');
Route::get('token', 'Api\userController@getToken');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
