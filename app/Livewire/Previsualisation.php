<?php

namespace App\Livewire;

use Livewire\Component;

class Previsualisation extends Component
{

    public $markdown = '';
    
    public function render()
    {
        return view('livewire.previsualisation');
    }

    public function save() {
        dd($this->markdown);
    }
}
