@extends('layouts.app')

@section('titulo')
Actualiza tus Datos
@endsection

@section('content')
    <div class="container">
    <div class="w-full pl-1 flex justify-center items-center">
        <form class="flex flex-col w-[400px] gap-3 bg-blue-300 p-5 rounded-xl" action="{{ route('personas.update', $persona->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label class="text-black font-bold text-lg" for="nombre">Nombre:</label>
                <input class="rounded p-1" type="text" class="form-control" id="nombre" name="nombre" value="{{ $persona->nombre }}" required>
            </div>
            <div class="form-group">
                <label class="text-black font-bold text-lg" for="cedula">Cédula:</label>
                <input class="rounded p-1" type="text" class="form-control" id="cedula" name="cedula" value="{{ $persona->cedula }}" required>
            </div>
            <div class="form-group">
                <label class="text-black font-bold text-lg" for="telefono">Teléfono:</label>
                <input class="rounded p-1" type="text" class="form-control" id="telefono" name="telefono" value="{{ $persona->telefono }}" required>
            </div>
            <div class="form-group">
                <label class="text-black font-bold text-lg" for="direccion">Dirección:</label>
                <input class="rounded p-1" class="form-control" id="direccion" name="direccion" value="{{ $persona->direccion }}"required>
            </div>
            <button class="bg-blue-600 font-bold rounded-xl p-2 mt-2" type="submit" class="btn btn-primary">Actualizar</button>
            <a class="bg-blue-500 hover:bg-green-700 text-white font-bold py-1 px-3 rounded" href="{{ route('personas.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
    </div>
@endsection
