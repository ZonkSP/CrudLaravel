@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Crear Usuario</h1>
    <form action="{{ route('usuarios.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="apellido_p" class="form-label">Apellido Paterno</label>
            <input type="text" class="form-control" id="apellido_p" name="apellido_p" required>
        </div>
        <div class="mb-3">
            <label for="apellido_m" class="form-label">Apellido Materno</label>
            <input type="text" class="form-control" id="apellido_m" name="apellido_m" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" required>
        </div>
        <div class="mb-3">
            <label for="clave_unica" class="form-label">Clave Única</label>
            <input type="text" class="form-control" id="clave_unica" name="clave_unica" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</div>
@endsection
