<?php

namespace App\Livewire;

use App\Models\Tag;
use App\Models\Forum;
use Livewire\Component;

class ForumComponent extends Component
{
    public $toPic = [] , $tag= "" ;


    public function filterTag(Tag $tag) {
        $this->tag  = $tag;
        if($this->tag) {
           $this->toPic = Forum::where('tag_id', $this->tag->id)->get();
        }
    }

    public function render()
    {
        if($this->toPic == []) {
            $this->toPic = Forum::orderByDesc('created_at')->get();
        } else {
            $this->toPic ;
        }
        return view('livewire.forum-component', [
            'allTopics'=> $this->toPic,
            'allTags'=> Tag::all()
        ]);
    }
}
