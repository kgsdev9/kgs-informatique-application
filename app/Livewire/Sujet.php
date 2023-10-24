<?php

namespace App\Livewire;

use App\Models\Topic;
use Livewire\Component;

class Sujet extends Component
{
    public function render()
    {
        return view('livewire.sujet', [
            'allTopic'=> Topic::all()
        ]);
    }
}
