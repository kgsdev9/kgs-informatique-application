<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
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
        return view('dashboard.articles.liste', [
            'allArticleForUser'=> Article::where('user_id','=', 1)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.articles.create', [
            'allTags'=> Tag::all()
        ]);
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

       $article  = Article::create([
            'title'=> $request->input('title')?? 'le resultat',
            'slug' => \Str::slug($request->input('title')),
            'mini_description' => $request->input('mini_description'),
            'description'=> $request->input('description'),
            'user_id' => 1
        ]);

        $article->articletags()->sync($request->tag_id);
        return redirect()->route('article.index', ['success' => true]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {   $ressource=  Article::find($id);
        $url = url()->current();
        $allTags = Tag::take(5)->inRandomOrder()->get();
        return view('dashboard.articles.show', compact('ressource', 'url', 'allTags'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {   $ressource = Article::find($id);
        $allTags = Tag::all();
        return view('dashboard.articles.edit', compact('ressource', 'allTags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $ressource = Article::find($id);
        $ressource->title = $request->input('title');
        $ressource->mini_description = $request->input('mini_description');
        $ressource->description = $request->input('description');
        $ressource->articletags()->sync($request->tag_id);
        $ressource->update();
        return redirect()->route('article.index', ['edited' => true]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
     
        $article = Article::find($id);
        $article->articletags()->detach();
        $article->delete();
        return redirect()->route('article.index', ['deleted'=> true]);
    }
}
