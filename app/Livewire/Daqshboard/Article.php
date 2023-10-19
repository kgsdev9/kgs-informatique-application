<?php

namespace App\Livewire\Daqshboard;

use App\Models\Article as ModelsArticle;
use Livewire\Component;

class Article extends Component
{
    public function render()
    {
        return view('livewire.daqshboard.article', [
            'allArticles' => ModelsArticle::all()
        ]);
    }

    public function createPost() {
        dd('sss');
    }
}
