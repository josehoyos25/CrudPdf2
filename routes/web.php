<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;

// Ruta principal, puedes redirigirla a la lista de personas o a otra página
Route::get('/', function () {
    return redirect()->route('personas.index');
});

// Rutas CRUD para Personas
Route::resource('personas', PersonaController::class);

// Ruta adicional para la exportación de los datos de una persona a PDF
Route::get('/personas/{id}/pdf', [PersonaController::class, 'exportarPDF'])->name('personas.exportar_pdf');
