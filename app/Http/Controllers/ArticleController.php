<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Http\Requests\ArticleRequest;


class ArticleController extends Controller
{
    public function index()
    {
        return view('article.index');
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
