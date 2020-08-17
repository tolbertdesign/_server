<?php

namespace App\Http\Controllers;

use App\Entities\Article;
use Illuminate\Http\Request;

class AboutPageController extends Controller
{
     /**
     * Show the about page.
     *
     * @return Response
     */
    public function show() {
        $articles = Article::take(3)->latest()->get();

        return view('about', ['articles' => $articles]);
    }
}
