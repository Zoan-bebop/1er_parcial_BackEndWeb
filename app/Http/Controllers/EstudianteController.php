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

    // Almacenar nuevo estudiante
public function store(Request $request)
{
    $request->validate([
        'nombres' => 'required|string|max:100',
        'apellidos' => 'required|string|max:100',
        'ci' => 'required|digits:8', 
        'edad' => 'required|integer|min:1|max:120',
        'fecha_nacimiento' => 'required|date',
        'email' => 'required|email' 
    ], [
        'ci.digits' => 'La cédula debe tener exactamente 8 dígitos.',
        'email.email' => 'El email debe tener un formato válido.',
        'edad.min' => 'La edad debe ser mayor a 0.',
        'edad.max' => 'La edad no puede ser mayor a 120 años.',
        'required' => 'El campo :attribute es obligatorio.'
    ]);

    // Crear estudiante con estado por defecto
    Estudiante::create([
        'nombres' => $request->nombres,
        'apellidos' => $request->apellidos,
        'ci' => $request->ci,
        'edad' => $request->edad,
        'fecha_nacimiento' => $request->fecha_nacimiento,
        'email' => $request->email,
        'estado' => true // ← Valor por defecto
    ]);

    return redirect()->route('estudiantes.index')
                     ->with('success', 'Estudiante creado exitosamente');
}
}