<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Comentario;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Policies\PerfilPolicy;
use Intervention\Image\Facades\Image;
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

        $request->request->add([
            'username' =>  Str::slug($request->username)
        ]);
        
        $this->validate($request,[
            'username' => ['required', 'unique:users,username,'.auth()->user()->id, 'min:3', 'max:20', 'not_in:twitter,editar-perfil' ],
        ]);

        if($request->imagen){
            $imagen = $request->file('imagen');

            $nombreImagen = Str::uuid() .  "." . $imagen->extension();

            $imagenServidor =  Image::make($imagen);
            $imagenServidor->fit(500,500);

            $imagenPath = public_path('perfiles') . '/' . $nombreImagen;
            $imagenServidor->save($imagenPath);
        }
        
        $usuario = User::find(auth()->user()->id);

        $usuario->username = $request->username;
        $usuario->imagen  = $nombreImagen ?? $usuario->imagen ?? null;
        $usuario->save();
        
        #redireccion
        return redirect()->route('post.index',$usuario->username);

        
    }
}
