<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $tags = Tag::all();
        $articles = Article::all();
        return view('article.index' , ['tags'=>$tags , 'articles'=>$articles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tags = Tag::all();
        return view('article.create' , compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $article = Article::create([
        'title' => $request->title,
        'description' => $request->description,
        ]);

        $article->tags()->attach($request->tag);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('article.show' , compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {   
        $tags = Tag::all();
        return view('article.edit' , ['article'=>$article , 'tags'=>$tags]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {   

        $article->update($request->all());
        
        $article->tags()->sync($request->tags ?? []);

        return redirect()->route('article.index')->with('status', 'Articolo aggiornato!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect(route('article.index'))->with('message' , 'articolo eliminato correttamente');
    }
}
