<?php

namespace App\Livewire;

use App\Models\Article as Post;
use App\Models\CategoryArticle;
use Livewire\Component;

class Article extends Component
{


    public $category = 1 ;

    public function test() {
        dd('merci');    
    }


    public function render()
    {
            return view('livewire.article', [
                'allArticles'=> Post::where('categoryarticle_id', $this->category)
                ->paginate(18),
                'categories' => CategoryArticle::all()
            ])->extends('master.master')->section('content');
    }


}
