@extends('layout')

@section('content')
<div class="card">
    <div class="card-header bg-primary text-white">
        <h1>Listado de Alumnos</h1>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Curso</th>
                    <th>Nota 1</th>
                    <th>Nota 2</th>
                    <th>Promedio</th>
                    <th>Condición</th>
                    <th>Fecha de Registro</th>
                </tr>
            </thead>
            <tbody>
                @foreach($alumnos as $alumno)
                <tr>
                    <td><a href="{{ route('alumnos.show', $alumno->id) }}">{{ $alumno->nombre }}</a></td>
                    <td>{{ $alumno->curso }}</td>
                    <td>{{ $alumno->nota1 }}</td>
                    <td>{{ $alumno->nota2 }}</td>
                    <td>{{ number_format(($alumno->nota1 + $alumno->nota2) / 2, 2) }}</td>
                    <td>{{ (($alumno->nota1 + $alumno->nota2) / 2) >= 13.5 ? 'Aprobado' : 'Desaprobado' }}</td>
                    <td>{{ $alumno->created_at->format('d/m/Y') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
