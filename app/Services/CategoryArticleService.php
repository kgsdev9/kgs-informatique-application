<?php

namespace App\Services ;


use App\Repositories\CategoryArticleRepository;

class  CategoryArticleService {

protected $categoryArticleRepository ;

public function __construct(CategoryArticleRepository $categoryArticleRepository)
{
    $this->categoryArticleRepository = $categoryArticleRepository;
}

    public function takeCategoryRamdomOrder() {
        return $this->categoryArticleRepository->takeCategoryRamdomOrder();

}

}
