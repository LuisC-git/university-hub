<?php

namespace App\Livewire;

use Livewire\Component;

class LikePost extends Component
{

    public $post;


    public function like(){
        return "hola";
    }

    public function render()
    {
        return view('livewire.like-post');
    }
}
