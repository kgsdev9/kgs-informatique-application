<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Services\ArticleService;
use App\Services\CategoryArticleService;
use App\Traits\ImplementeServiceExterne;
;

class HomeController extends Controller
{

    use ImplementeServiceExterne;


    protected $categoryArticleService;
    protected $articleService;

    public function __construct(CategoryArticleService $categoryArticleService, ArticleService $articleService)
    {
     $this->categoryArticleService = $categoryArticleService;
     $this->articleService = $articleService;
     }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    
        return view('welcome', [
            'allCategories'=> $this->categoryArticleService->takeCategoryRamdomOrder()
        ]);
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
