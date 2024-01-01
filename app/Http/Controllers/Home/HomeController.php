<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Article;
use App\Models\Tag;
use App\Services\ArticleService;
use App\Services\TagService;
use App\Traits\ImplementeServiceExterne;

class HomeController extends Controller
{
    use ImplementeServiceExterne;

    protected $tagService;
    protected $articleService;

    public function __construct(TagService $tagService, ArticleService $articleService)
    {
     $this->tagService = $tagService;
     $this->articleService = $articleService;
     }

     public function article() {
            return view('home.article.article');
     }

     public function articleTag($id) {
        $tag = Tag::where('id', $id)->first();
        return view('home.articlecategory.index',[
            'articleTag'=> $tag->articletags()->get(),
            'tag'=> $tag
        ]);
     }

     public function showApplication($slug) {


        return view('home.application.detail', [
            'detailApp'=> Application::where('slug', $slug)->first(),
            'otherApplication'=> Application::where('slug','!=', $slug)->inRandomOrder()->orderByDesc('created_at')->paginate(10)
        ]);
     }

     public function application() {
        return view('home.application.application', [
            'allApplication'=> Application::orderByDesc('created_at')->get()
        ]);
     }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('welcome', [
            'allCategories'=> $this->tagService->takeCategoryRamdomOrder(),
            'articlesTake' => $this->articleService->takeArticleLimited()
        ]);
    }

    public function topic() {

        return view('home.sujets.sujet');
    }

    public function articles() {
        return view('articles.article', [
            'allArticles' => $this->articleService->all()
        ]);
    }

    public function show($id)  {
        $this->countView($id);
    }





}
