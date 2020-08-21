<?php

namespace App\Http\Controllers;

use App\Entities\Article;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show()
    {
        $articles = Article::take(3)->latest()->get();

        // $somethingYouWantToDebug = new StdClass;
        // tinker($articles);

        return view('dashboard', ['articles' => $articles]);
    }
}
