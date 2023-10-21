<?php

namespace App\Livewire;

use App\Models\Article as Post;
use App\Models\Tag;
use Livewire\Component;
use Illuminate\Support\Collection;

class Article extends Component
{


    public $posts;

    public $pageNumber = 1;

    public $allTags ;

    public $hasMorePages;

    public function mount()
    {
        $this->posts = new Collection();
        $this->allTags = Tag::all();
        $this->loadPosts();
    }

    public function loadPosts()
    {
        $posts = Post::orderByDesc('created_at')->paginate(13, ['*'], 'page', $this->pageNumber);

        $this->pageNumber += 1;

        $this->hasMorePages = $posts->hasMorePages();

        $this->posts->push(...$posts->items());
    }

    public function render()
    {
         return view('livewire.article');
    }


}
