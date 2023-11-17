{{--JSS--}}
@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('personas.update', $persona->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $persona->nombre }}" required>
            </div>
            <div class="form-group">
                <label for="cedula">Cédula:</label>
                <input type="text" class="form-control" id="cedula" name="cedula" value="{{ $persona->cedula }}" required>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $persona->telefono }}" required>
            </div>
            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <textarea class="form-control" id="direccion" name="direccion" required>{{ $persona->direccion }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{ route('personas.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
