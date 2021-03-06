<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticlesRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ArticlesController extends Controller
{
    public function index(){
        $articles = Article::all();
        return  view('articles/index')->with('articles', $articles);
    }

    public function showArticle($id){
        $article = Article::find($id);
        return view('articles/showArticle')->with('article', $article);
    }
    public function create(){
        return view('articles.create');
    }
    public function store(ArticlesRequest $request){
        $title = Input::get('title');
        $content = Input::get('content');
        Article::create([
           'title'=>$title,
           'content'=>$content
        ]);
        return redirect()->route('articles.index');
    }

    public function edit($id){
        $articles = Article::find($id);
        return view('articles/edit');
    }

    public function update($id){
        dd("stop");
    }
}
