{{--JSS--}}
@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">
        <a href="{{ route('personas.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Agregar Persona</a>
        <table class="table-auto w-full mt-4">
            <thead>
                <tr class="bg-gray-100">
                    <th class="px-4 py-2">Nombre</th>
                    <th class="px-4 py-2">Cédula</th>
                    <th class="px-4 py-2">Teléfono</th>
                    <th class="px-4 py-2">Dirección</th>
                    <th class="px-4 py-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($personas as $persona)
                    <tr>
                        <td class="border px-4 py-2">{{ $persona->nombre }}</td>
                        <td class="border px-4 py-2">{{ $persona->cedula }}</td>
                        <td class="border px-4 py-2">{{ $persona->telefono }}</td>
                        <td class="border px-4 py-2">{{ $persona->direccion }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('personas.edit', $persona->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-3 rounded">Editar</a>
                            <a href="{{ route('personas.exportar_pdf', $persona->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-3 rounded">Exportar a PDF</a>
                            <form action="{{ route('personas.destroy', $persona->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
