<?php

use App\Entities\Article;
use App\Entities\Comment;

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

Route::get('/dashboard', 'DashboardController@show')->name('dashboard');
Route::get('/example', 'ExampleController@show');
Route::get('/about', 'AboutPageController@show');
Route::get('/', 'WelcomeController@show')->name('home');


Route::get('/about', function () {
    return view('dashboard');
})->name('about');

Route::get('/testimonials', function () {
    return view('dashboard');
})->name('testimonials');

Route::get('/contact', function () {
    return view('dashboard');
})->name('contact');

Route::get('/contact-team', function () {
    return view('dashboard');
});


Route::get('/home', 'HomeController@show');

Route::get('/comments/{comment}/edit', function (Comment $comment) {
    return view('comments.edit', ['comment' => $comment]);
});

Route::patch('/comments/{comment}', function (Comment $comment) {
    $comment->update(
        request()->validate(['body' => 'required|string'])
    );

    return redirect("/comments/{$comment->id}/edit");
});

Route::delete('/comments/{comment}', function (Comment $comment) {
    // authorize the delete

    $comment->delete();

    return redirect('/');
});
