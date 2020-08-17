<?php

namespace App\Http\Controllers;

use App\Entities\Article;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function show()
    {
        $articles = Article::take(3)->latest()->get();

        return view('example', ['articles' => $articles]);
    }
}
