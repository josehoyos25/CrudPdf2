<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;
use PDF;

class PersonaController extends Controller
{
    // Muestra la lista de personas
    public function index()
    {
        $personas = Persona::all();
        return view('personas.index', compact('personas'));
    }

    // Muestra el formulario para crear una nueva persona
    public function create()
    {
        return view('personas.create');
    }

    // Guarda una nueva persona en la base de datos
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required',
            'cedula' => 'required|unique:personas',
            'telefono' => 'required',
            'direccion' => 'required'
        ]);

        Persona::create($validatedData);
        return redirect()->route('personas.index')->with('success', 'Persona creada con éxito.');
    }

    // Muestra los detalles de una persona específica
    public function show($id)
    {
        $persona = Persona::findOrFail($id);
        return view('personas.show', compact('persona'));
    }

    // Muestra el formulario para editar una persona
    public function edit($id)
    {
        $persona = Persona::findOrFail($id);
        return view('personas.edit', compact('persona'));
    }

    // Actualiza una persona en la base de datos
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nombre' => 'required',
            'cedula' => 'required|unique:personas,cedula,' . $id,
            'telefono' => 'required',
            'direccion' => 'required'
        ]);

        $persona = Persona::findOrFail($id);
        $persona->update($validatedData);
        return redirect()->route('personas.index')->with('success', 'Persona actualizada con éxito.');
    }

    // Elimina una persona de la base de datos
    public function destroy($id)
    {
        $persona = Persona::findOrFail($id);
        $persona->delete();
        return redirect()->route('personas.index')->with('success', 'Persona eliminada con éxito.');
    }

    // Exporta los datos de una persona a PDF
    public function exportarPDF($id)
    {
        $persona = Persona::findOrFail($id);
        $pdf = PDF::loadView('pdf.persona', compact('persona'));
        return $pdf->download('datos_persona_'.$id.'.pdf');
    }
}
