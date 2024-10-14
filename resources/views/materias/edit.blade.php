@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Editar Materia</h1>
    <form action="{{ route('materias.update', $materia->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $materia->nombre }}" required>
        </div>
        <div class="mb-3">
            <label for="clave_unica" class="form-label">Clave Única</label>
            <input type="text" class="form-control" id="clave_unica" name="clave_unica" value="{{ $materia->clave_unica }}" required>
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
</div>
@endsection
