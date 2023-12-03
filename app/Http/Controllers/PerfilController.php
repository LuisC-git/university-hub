<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Comentario;
use Illuminate\Http\Request;
use App\Policies\PerfilPolicy;
use Illuminate\Auth\Access\AuthorizationException;

class PerfilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(User $user)
    {
        try {
        $this->authorize('viewAny', $user);
        return view('perfil.index');
        
    } catch (AuthorizationException $e) {
        // La autorización falló, realiza la redirección aquí
        return redirect()->route('perfil.index',auth()->user());
    }
    }

    public function store(Request $request, User $user)
    {

        // return redirect()->
    }
}
