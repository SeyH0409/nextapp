<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Http\Requests\ArticleRequest;
use Session;


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

    public function show($id)
    {
        $article = Article::find($id);
        if (is_null($article)) 
        {
            \Session::flash('err_msg', 'nothing data');
            return redirect(route('index'));
        } else 
        {
            return view('article.show', ['article' => $article]);
        }
    }
}
