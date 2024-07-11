@extends('layout')

@section('content')
<h1>{{ $alumno->nombre }}</h1>
<ul>
    <li>Curso: {{ $alumno->curso }}</li>
    <li>Nota 1: {{ $alumno->nota1 }}</li>
    <li>Nota 2: {{ $alumno->nota2 }}</li>
    <li>Promedio: {{ ($alumno->nota1 + $alumno->nota2) / 2 }}</li>
    <li>Condición: {{ ($alumno->nota1 + $alumno->nota2) / 2 >= 6 ? 'Aprobado' : 'Desaprobado' }}</li>
    <li>Fecha de Registro: {{ $alumno->created_at }}</li>
</ul>
@endsection
