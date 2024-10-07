@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Editar Usuario</h1>
    <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $usuario->nombre }}" required>
        </div>
        <div class="mb-3">
            <label for="apellido_p" class="form-label">Apellido Paterno</label>
            <input type="text" class="form-control" id="apellido_p" name="apellido_p" value="{{ $usuario->apellido_p }}" required>
        </div>
        <div class="mb-3">
            <label for="apellido_m" class="form-label">Apellido Materno</label>
            <input type="text" class="form-control" id="apellido_m" name="apellido_m" value="{{ $usuario->apellido_m }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $usuario->email }}" required>
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $usuario->telefono }}" required>
        </div>
        <div class="mb-3">
            <label for="clave_unica" class="form-label">Clave Única</label>
            <input type="text" class="form-control" id="clave_unica" name="clave_unica" value="{{ $usuario->clave_unica }}" required>
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
</div>
@endsection
