<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Comentario;

class ComentarioPost extends Component
{

    public $comentario;
    public $post;
    public $mensaje;

    protected $rules = [
        'comentario' => 'required|max:255',

    ];



    public function submitForm()
    {


        //crear
        // $comentario = new Comentario;
        // $comentario->comentario = $request->comentario;
        // $comentario->save();
        $this->validate();



        Comentario::create([
            'user_id' => auth()->user()->id,
            'post_id' =>  $this->post->id,
            'comentario' => $this->comentario,
        ]);

        // Limpiar el campo después de agregar el comentario
        $this->comentario = '';
    }



    public function render()
    {
        return view('livewire.comentario-post');
    }
}
