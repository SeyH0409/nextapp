<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Http\Requests\ArticleRequest;


class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('article.index', [
            'articles' => $articles
        ]);
    }
    public function create()
    {
        return view('article.create');
    }

    public function store(ArticleRequest $request)
    {
        $inputs = $request->all();
        // dd($inputs);
        Article::create($inputs);
        
        return redirect()->route('index');
    }
}
