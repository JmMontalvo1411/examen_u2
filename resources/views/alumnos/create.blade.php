@extends('layout')

@section('content')
<h1>Ingreso</h1>
<form action="{{ route('alumnos.store') }}" method="POST">
    @csrf
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}">
    @error('nombre')
    <div>{{ $message }}</div>
    @enderror

    <label for="curso">Curso</label>
    <input type="text" name="curso" id="curso" value="{{ old('curso') }}">
    @error('curso')
    <div>{{ $message }}</div>
    @enderror

    <label for="nota1">Nota 1</label>
    <input type="number" name="nota1" id="nota1" step="0.1" value="{{ old('nota1') }}">
    @error('nota1')
    <div>{{ $message }}</div>
    @enderror

    <label for="nota2">Nota 2</label>
    <input type="number" name="nota2" id="nota2" step="0.1" value="{{ old('nota2') }}">
    @error('nota2')
    <div>{{ $message }}</div>
    @enderror

    <button type="submit">Guardar</button>
</form>
@endsection
