<?php

namespace App\Repositories;

use App\Models\Tag;

class TagRepository {

protected $tag ;

public function __construct(Tag $tag)
{
    $this->tag = $tag;
}

    public function takeCategoryRamdomOrder() {
        return $this->tag->inRandomOrder()->take(8)->get();
    }

}
