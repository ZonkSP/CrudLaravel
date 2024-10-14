<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    public function index()
    {
        $materias = Materia::all();
        return view('materias.index', compact('materias'));
    }

    public function create()
    {
        return view('materias.create');
    }

    public function store(Request $request)
    {
        $nuevoMateria = new Materia();
        $nuevoMateria->nombre = $request->nombre;
        $nuevoMateria->clave_unica = $request->clave_unica;
        $nuevoMateria->save();

        return redirect()->route('materias.index');
    }

    public function edit($id)
    {
        $materia = Materia::findOrFail($id);
        return view('materias.edit', compact('materias'));
    }

    public function update(Request $request, $id)
    {
        $materia = Materia::findOrFail($id);
        $materia->nombre = $request->nombre;
        $materia->clave_unica = $request->clave_unica;
        $materia->save();

        return redirect()->route('materias.index');
    }

    public function destroy($id)
    {
        $materia = Materia::findOrFail($id);
        $materia->delete();
        return redirect()->route('materias.index');
    }
}

