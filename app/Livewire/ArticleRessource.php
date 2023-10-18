<?php

namespace App\Livewire;

use Livewire\Component;

class ArticleRessource extends Component
{

    public $theme = 'default';

    public function render()
    {
        return view('livewire.article-ressource')
                ->extends('dashboard.master')
                ->section('master');
    }

}
