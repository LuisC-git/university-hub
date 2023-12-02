<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use App\Models\Post;
use App\Models\User;
use App\Policies\PerfilPolicy;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(User $user)
    {
        $this->authorize('viewAny', Comentario::class);

        return view('perfil.index');
    }

    public function store(Request $request, User $user)
    {

        // return redirect()->
    }
}
