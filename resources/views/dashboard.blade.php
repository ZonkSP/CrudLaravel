<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-950 dark:text-gray-950 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-950 dark:text-gray-950">
                    <a href="{{ route('usuarios.index') }}" class="inline-block">
                        <x-primary-button class="ms-3">
                            {{ __('Usuarios') }}
                        </x-primary-button>
                    </a>
                    <x-primary-button class="ms-3">
                        {{ __('Alumnos') }}
                    </x-primary-button>
                    <a href="{{ route('materias.index') }}" class="inline-block">
                        <x-primary-button class="ms-3">
                            {{ __('Materias') }}
                        </x-primary-button>
                    </a>
                    <x-primary-button class="ms-3">
                        {{ __('Grupos') }}
                    </x-primary-button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
