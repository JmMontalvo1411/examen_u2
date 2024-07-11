<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    public function index()
    {
        $alumnos = Alumno::all();
        return view('alumnos.index', compact('alumnos'));
    }

    public function create()
    {
        return view('alumnos.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
            'curso' => 'required|max:255',
            'nota1' => 'required|numeric|min:0|max:20',
            'nota2' => 'required|numeric|min:0|max:20',
        ], [
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.max' => 'El nombre no puede tener más de 255 caracteres.',
            'curso.required' => 'El curso es obligatorio.',
            'curso.max' => 'El curso no puede tener más de 255 caracteres.',
            'nota1.required' => 'La nota 1 es obligatoria.',
            'nota1.numeric' => 'La nota 1 debe ser un número.',
            'nota1.min' => 'La nota 1 debe ser al menos 0.',
            'nota1.max' => 'La nota 1 no puede ser mayor a 20.',
            'nota2.required' => 'La nota 2 es obligatoria.',
            'nota2.numeric' => 'La nota 2 debe ser un número.',
            'nota2.min' => 'La nota 2 debe ser al menos 0.',
            'nota2.max' => 'La nota 2 no puede ser mayor a 20.',
        ]);

        Alumno::create($validatedData);

        return redirect()->route('alumnos.index')->with('success', 'Alumno creado exitosamente.');
    }

    public function show($id)
    {
        $alumno = Alumno::findOrFail($id);
        return view('alumnos.show', compact('alumno'));
    }

    public function home()
    {
        $totalAlumnos = Alumno::count();
        return view('home', compact('totalAlumnos'));
    }
}
