<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
     // Mostrar listado de estudiantes
    public function index()
    {
        $estudiantes = Estudiante::where('estado', true)->get();
        return view('estudiantes.index', compact('estudiantes'));
    }

    // Mostrar formulario para crear estudiante
    public function create()
    {
        return view('estudiantes.create');
    }
// Almacenar nueva persona
public function store(Request $request)
{
    $request->validate([
        'nombres' => 'required|string|max:100',
        'apellidos' => 'required|string|max:100',
        'ci' => 'required|digits:10|unique:estudiantes,ci', 
        'edad' => 'required|integer|min:1|max:120',
        'fecha_nacimiento' => 'required|date',
        'email' => 'required|email|unique:estudiantes,email',
        'estado' => 'sometimes|boolean'
    ]);

    Estudiante::create($request->all());

    return redirect()->route('estudiantes.index')
                     ->with('success', 'Estudiante creado exitosamente');
}
};