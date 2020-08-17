<?php

use App\Entities\Article;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/articles', 'ArticlesController@index');
Route::post('/articles', 'ArticlesController@store');
Route::get('/articles/create', 'ArticlesController@create');
Route::get('/articles/{article}', 'ArticlesController@show');
Route::get('/articles/{article}/edit', 'ArticlesController@edit');
Route::put('/articles/{article}', 'ArticlesController@update');

Route::get('/about', function () {
    return view('about', [
        'articles' => Article::take(3)->latest()->get()
    ]);
});

Route::get('/new', function () {
    return view('new');
});

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', 'WelcomeController@show');

Route::get('/home', 'HomeController@show');
