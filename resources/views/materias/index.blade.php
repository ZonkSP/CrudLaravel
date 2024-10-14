<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-950 dark:text-gray-950 leading-tight">
            {{ __('Materias') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-950 dark:text-gray-950">
                    <div class="container">
                        <a href="{{ route('materias.create') }}" class="btn btn-primary mb-3">Agregar Materia</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($materias as $materia)
                                <tr>
                                    <td>{{ $materia->id }}</td>
                                    <td>{{ $materia->nombre }}</td>
                                    <td>
                                        <a href="{{ route('materias.edit', $materia->id) }}" class="btn btn-warning">Editar</a>
                                        <form action="{{ route('materias.destroy', $materia->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>