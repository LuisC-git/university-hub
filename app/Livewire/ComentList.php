<?php

namespace App\Livewire;

use App\Models\Comentario;
use Livewire\Component;

class ComentList extends Component
{

    protected $listeners = ['commentAdded' => 'refreshComments'];



    public function render()
    {

        $comentarios = Comentario::all();

        return view('livewire.coment-list', [ 'comnetarios' => $comentarios ]);
    }


    public function refreshComments()
    {
        // Actualizar la lista de comentarios después de agregar uno nuevo
        $this->render();
    }

}
