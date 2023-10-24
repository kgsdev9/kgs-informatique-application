<?php

namespace App\Livewire;

use App\Models\Tag;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Article as Post;


class Article extends Component
{
    use WithPagination;


    public $tag_id = "";


    // public function testing() {
    //     $articles = Article::with(['tags', 'user', 'user.transactions'])
    //     ->withCount(['views', 'reactions'])
    //     ->published()
    //     ->notPinned()
    //     ->orderByDesc('sponsored_at')
    //     ->orderByDesc('published_at');

    // $tags = Tag::whereHas('articles', function ($query): void {
    //     $query->published();
    // })->orderBy('name')->get();

    // $selectedTag = Tag::where('slug', $this->tag)->first();

    // if ($this->tag) {
    //    $ressource =  Tag::with('articles')->find($this->id);
    //    dd($ressource);
    // }

    // $articles->{$this->sortBy}();
    // }

    public function add($tag) {
        dd('merci');
    }


    public function render()
    {
        $query = Post::query();

        if($this->tag_id != "") {
            dd('ss');
            $tag =  Tag::where('id', '=', $this->tag_id)->first();

            if($tag) {

            }
        }


         return view('livewire.article', [
            'allTags'=> Tag::all(),
            'posts' => $query->orderByDesc('created_at')->paginate(13)
         ]);
    }


}
