<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Topic;
use App\Services\ArticleService;
use App\Services\TagService;
use App\Traits\ImplementeServiceExterne;
use Illuminate\Http\Request;

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


    public function articleTag($id) {
       $ressource =  Article::where('slug', '=',$id)->get();
       dd($ressource);
    }


}
