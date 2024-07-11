@extends('layout')

@section('content')
<h1>Listado</h1>
<ul>
    @foreach($alumnos as $alumno)
    <li><a href="{{ route('alumnos.show', $alumno) }}">{{ $alumno->nombre }}</a></li>
    @endforeach
</ul>
@endsection
