<?php

namespace App\Livewire;

use App\Models\Article as Post;
use App\Models\Tag;
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
                'allArticles'=> Post::paginate(13),
                'allTags' => Tag::all()
            ])->extends('master.master')->section('content');
    }


}
