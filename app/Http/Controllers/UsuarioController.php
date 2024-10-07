<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        $nuevoUsuario = new Usuario();
        $nuevoUsuario->nombre = $request->nombre;
        $nuevoUsuario->apellido_p = $request->apellido_p;
        $nuevoUsuario->apellido_m = $request->apellido_m;
        $nuevoUsuario->email = $request->email;
        $nuevoUsuario->telefono = $request->telefono;
        $nuevoUsuario->clave_unica = $request->clave_unica;
        $nuevoUsuario->save();

        return redirect()->route('usuarios.index');
    }

    public function edit($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.edit', compact('usuario'));
    }

    public function update(Request $request, $id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->nombre = $request->nombre;
        $usuario->apellido_p = $request->apellido_p;
        $usuario->apellido_m = $request->apellido_m;
        $usuario->email = $request->email;
        $usuario->telefono = $request->telefono;
        $usuario->clave_unica = $request->clave_unica;
        $usuario->save();

        return redirect()->route('usuarios.index');
    }

    public function destroy($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
        return redirect()->route('usuarios.index');
    }
}

