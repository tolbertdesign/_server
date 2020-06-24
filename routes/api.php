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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/books', 'BookController@index');
// ->middleware('auth:sanctum');

// //Task Routes
// Route::post('/add-task', 'TaskController@addTask')->middleware('auth:sanctum');
// Route::get('/get-task', 'TaskController@getTask')->middleware('auth:sanctum');
