<?php

namespace App\Livewire\Admin;

use App\Models\Article;
use App\Models\Tag;
use Livewire\Component;
use Livewire\WithFileUploads;


class ArticleComponent extends Component
{
    use WithFileUploads;

    public  $title, $description, $image, $tag_id , $postId, $updatePost = false, $addPost = false;


    protected $rules = [
        'title' => 'required',
        'description' => 'required',
        'image' => 'required'
    ];


    public function resetFields(){
        $this->title = '';
        $this->description = '';
        $this->image = '';
        $this->tag_id = '';
    }


    public function render()
    {
        return view('livewire.admin.article-component', [
            'allTags' => Tag::all()
        ]);
    }


    public function createArticle() {


        $this->validate();
        $this->image->store('article');

       $article =  Article::create([
            'title'=> $this->title,
            'slug'=> $this->title,
            'description'=> $this->description,
            'image' => $this->image,
            'user_id'=> 1,
        ]);

        $article->articletags()->sync($this->tag_id);

        $this->resetFields();

      
    }
}
