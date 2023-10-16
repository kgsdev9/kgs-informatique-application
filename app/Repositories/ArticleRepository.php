<?php

namespace App\Repositories;

use App\Models\Article;


class  ArticleRepository {

protected $article ;

public function __construct(Article $article)
{
    $this->article = $article;
}

    public function  all() {
        return $this->article->paginate(10);
    }


    public function takeArticleLimited() {
        return $this->article
                    ->take(4)
                    ->inRandomOrder()
                    ->orderByDesc('created_at')
                    ->get();
    }

    
}
