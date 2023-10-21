<?php

namespace App\Livewire;

use App\Models\Tag;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Article as Post;


class Article extends Component
{
    use WithPagination;
    

    public function render()
    {
        $query = Post::query();




         return view('livewire.article', [
            'allTags'=> Tag::all(),
            'posts' => $query->orderByDesc('created_at')->paginate(13)
         ]);
    }


}
