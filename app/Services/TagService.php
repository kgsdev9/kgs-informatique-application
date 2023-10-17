<?php

namespace App\Services ;

use App\Repositories\TagRepository;

class  TagService {

protected $tagRepository ;

public function __construct(TagRepository $tagRepository)
{
    $this->tagRepository = $tagRepository;
}

    public function takeCategoryRamdomOrder() {
        return $this->tagRepository->takeCategoryRamdomOrder();
}

}
