<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register the API routes for your application as
| the routes are automatically authenticated using the API guard and
| loaded automatically by this application's RouteServiceProvider.
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::post('/login', 'UserController@login');
// Route::post('/login', function (Request $request) {
//     $data = $request->validate([
//         'email' => 'required',
//         'password' => 'required',
//     ]);
//     auth()->attempt($request->only('email', 'password'));
//     return auth()->user();
// });

// Route::get('/logout', 'UserController@logout');
// Route::post('/logout', function (Request $request) {
//     auth()->logout();
//     // return response('');

//     $request->session()->invalidate();
//     if ($request->wantsJson()) {
//         return response()->json([], 204);
//     }
//     return redirect('/');
// });

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/books', 'BookController@index');
// ->middleware('auth:sanctum');

// //Task Routes
// Route::post('/add-task', 'TaskController@addTask')->middleware('auth:sanctum');
// Route::get('/get-task', 'TaskController@getTask')->middleware('auth:sanctum');


Route::group([
    'middleware' => 'auth:api'
], function () {
    //
});
