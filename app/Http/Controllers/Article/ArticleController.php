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
        return view('articles.article', []);
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
            'title'=> $request->input('name')?? 'le resultat',
            'slug' => \Str::slug($request->input('title')),
            'description'=> $request->input('description'),
            'user_id' => 1
        ]);

        foreach($request->tag_id as $key => $value) {
            if($key != 0) {
            $article->articletags()->attach((array)$key);
            }

        }
    dd('merci');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {   $ressource=  Article::find($id);
        return view('dashboard.articles.show', compact('ressource'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
