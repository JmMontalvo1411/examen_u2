@extends('layout')

@section('content')
<div class="card">
    <div class="card-header bg-primary text-white">
        <h1>Detalles del Alumno</h1>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" value="{{ $alumno->nombre }}" readonly>
        </div>

        <div class="form-group">
            <label for="curso">Curso</label>
            <input type="text" class="form-control" value="{{ $alumno->curso }}" readonly>
        </div>

        <div class="form-group">
            <label for="nota1">Nota 1</label>
            <input type="number" class="form-control" value="{{ $alumno->nota1 }}" readonly>
        </div>

        <div class="form-group">
            <label for="nota2">Nota 2</label>
            <input type="number" class="form-control" value="{{ $alumno->nota2 }}" readonly>
        </div>

        <div class="form-group">
            <label for="promedio">Promedio</label>
            <input type="text" class="form-control" value="{{ number_format(($alumno->nota1 + $alumno->nota2) / 2, 2) }}" readonly>
        </div>

        <div class="form-group">
            <label for="condicion">Condición</label>
            <input type="text" class="form-control" value="{{ (($alumno->nota1 + $alumno->nota2) / 2) >= 6 ? 'Aprobado' : 'Desaprobado' }}" readonly>
        </div>

        <div class="form-group">
            <label for="fecha_reg">Fecha de Registro</label>
            <input type="text" class="form-control" value="{{ $alumno->created_at->format('d/m/Y') }}" readonly>
        </div>
    </div>
</div>
@endsection
