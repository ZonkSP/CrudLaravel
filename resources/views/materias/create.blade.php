@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Crear Materia</h1>
    <form action="{{ route('materias.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="clave_unica" class="form-label">Clave Única</label>
            <input type="text" class="form-control" id="clave_unica" name="clave_unica" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</div>
@endsection
