@extends('layout')

@section('content')
<div class="card">
    <div class="card-header bg-primary text-white">
        <h1>Bienvenido a la Aplicación de Gestión de Alumnos</h1>
    </div>
    <div class="card-body">
        <p class="lead">Aquí puedes gestionar la información de los alumnos, incluyendo la creación, actualización, y visualización de detalles.</p>
        <hr class="my-4">
        <p>Actualmente, hay <strong>{{ $totalAlumnos }}</strong> alumnos registrados.</p>
        <a class="btn btn-primary btn-lg" href="{{ route('alumnos.create') }}" role="button">Ingresar Nuevo Alumno</a>
        <a class="btn btn-secondary btn-lg" href="{{ route('alumnos.index') }}" role="button">Ver Listado de Alumnos</a>
    </div>
</div>
@endsection
