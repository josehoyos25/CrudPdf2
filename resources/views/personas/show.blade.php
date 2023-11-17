{{--JSS--}}
@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Detalles de la Persona</h3>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $persona->nombre }}</h5>
                <p class="card-text"><strong>Cédula:</strong> {{ $persona->cedula }}</p>
                <p class="card-text"><strong>Teléfono:</strong> {{ $persona->telefono }}</p>
                <p class="card-text"><strong>Dirección:</strong> {{ $persona->direccion }}</p>
                <a href="{{ route('personas.index') }}" class="btn btn-primary">Volver a la lista</a>
                <a href="{{ route('personas.exportar_pdf', $persona->id) }}" class="btn btn-info">Exportar a PDF</a>
            </div>
        </div>
    </div>
@endsection
