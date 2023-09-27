<?php

namespace App\Repositories; 

use App\Models\CategoryArticle;

class  CategoryArticleRepository {

protected $categoryArticle ;

public function __construct(CategoryArticle $categoryArticle)
{
    $this->categoryArticle = $categoryArticle;
}

    public function takeCategoryRamdomOrder() {
        return $this->categoryArticle->inRandomOrder()->take(20)->get();
    }

}
