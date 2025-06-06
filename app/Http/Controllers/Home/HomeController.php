<?php

namespace App\Http\Controllers\Home;

use App\Models\Tag;
use App\Models\Forum;
use App\Models\Article;
use App\Models\Application;
use App\Services\TagService;
use App\Services\ArticleService;
use App\Http\Controllers\Controller;
use App\Models\Podcats;
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

     public function articleTag($slug) {
        $tag = Tag::where('slug', $slug)->first();
        return view('home.articlecategory.index',[
            'articleTag'=> $tag->articletags()->get(),
            'tag'=> $tag
        ]);
     }

     public function viewPost($slug) {
        $this->countView($slug);
          return view('home.blog.show', [
              'ressource'=>  Article::where('slug', $slug)->first()
          ]);
     }

     public function courses() {
        return view('home.formation.index', [
            'allTags'=> Tag::all()
        ]);
     }

     public function blog() {
        return view('home.blog.index');
     }

     public function showTopic($slug) {
      $forum = Forum::where('slug', $slug)->first();
      if($forum) {
        return view('forums.detail', [
            'topic'=> $forum
        ]);
      }
     }
     public function podCasts() {
        return view('home.podCasts.index', [
            'allPodcasts'=> Podcats::all()
        ]);
     }

     public function showApplication($slug) {


        return view('home.application.detail', [
            'detailApp'=> Application::where('slug', $slug)->first(),
            'otherApplication'=> Application::where('slug','!=', $slug)->inRandomOrder()->orderByDesc('created_at')->paginate(10)
        ]);
     }

     public function showPodcast($slug)  {
        $resssource =  Podcats::where('slug', $slug)->first();
        if($resssource) {
          return view('home.podCasts.detail', [
              'ressource'=> $resssource
          ]);
        } else{
          return redirect()->route('home');
      }
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

    public function forum() {

        return view('forums.index');
    }

    public function articles() {
        return view('articles.article', [
            'allArticles' => $this->articleService->all()
        ]);
    }


}
