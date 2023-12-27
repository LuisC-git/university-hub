<?php

namespace App\Livewire;

use App\Models\Comentario;
use Livewire\Component;

class ComentList extends Component
{

    protected $listeners = ['render' => 'render'];
    public $post;



    public function render()
    {

        // $comentario = Comentario::all();
        return view('livewire.coment-list');
    }


    // public function commentAdded()
    // {
    //     // Actualizar la lista de comentarios después de agregar uno nuevo
    //     $this->render();
    // }

}
