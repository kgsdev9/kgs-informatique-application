<?php

namespace App\Livewire;

use App\Models\Tag;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Article as Post;


class Article extends Component
{
    use WithPagination;

    public  $tag = null;

    protected $queryString = [
        'tag' => ['except' => ''],
        'sortBy' => ['except' => 'recent'],
    ];

    public function toggleTag(string $tag): void

    {
        $this->tag = Tag::where('id', '=', $tag)->first();
    }


    public function render()
    {
        $articles = Post::with('articletags')->orderByDesc('created_at');

            $tags = Tag::whereHas('articletags', function (): void {
            })->orderBy('name')->get();

            $selectedTag = Tag::where('id', $this->tag)->first();

            if ($this->tag) {
                 $articles->whereHas('articletags', function($q){
                    $q->where('tag_id', $this->tag->id);

          })->get();

            }
         return view('livewire.article', [
            'articles'=> $articles->paginate(10),
            'tags' => $tags,
            'selectedTag' => $selectedTag,
         ]);
    }


}
