<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Services\ArticleService;
use App\Services\CategoryArticleService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
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


}
