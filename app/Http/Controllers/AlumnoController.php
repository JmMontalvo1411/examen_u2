<?php
namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

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
        $request->validate([
            'nombre' => 'required|string|max:255',
            'curso' => 'required|string|max:255',
            'nota1' => 'required|numeric|min:0|max:10',
            'nota2' => 'required|numeric|min:0|max:10',
        ], [
            'nombre.required' => 'El campo nombre es obligatorio.',
            'nombre.string' => 'El campo nombre debe ser una cadena de texto.',
            'nombre.max' => 'El campo nombre no puede tener más de 255 caracteres.',
            'curso.required' => 'El campo curso es obligatorio.',
            'curso.string' => 'El campo curso debe ser una cadena de texto.',
            'curso.max' => 'El campo curso no puede tener más de 255 caracteres.',
            'nota1.required' => 'El campo nota 1 es obligatorio.',
            'nota1.numeric' => 'El campo nota 1 debe ser un número.',
            'nota1.min' => 'El campo nota 1 debe ser al menos 0.',
            'nota1.max' => 'El campo nota 1 no puede ser mayor que 10.',
            'nota2.required' => 'El campo nota 2 es obligatorio.',
            'nota2.numeric' => 'El campo nota 2 debe ser un número.',
            'nota2.min' => 'El campo nota 2 debe ser al menos 0.',
            'nota2.max' => 'El campo nota 2 no puede ser mayor que 10.',
        ]);

        Alumno::create($request->all());
        return redirect()->route('alumnos.index');
    }

    public function show(Alumno $alumno)
    {
        return view('alumnos.show', compact('alumno'));
    }
}
