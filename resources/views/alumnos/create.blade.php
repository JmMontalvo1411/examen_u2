@extends('layout')

@section('content')
<div class="card">
    <div class="card-header bg-primary text-white">
        <h1>Ingreso de Alumno</h1>
    </div>
    <div class="card-body">
        <form action="{{ route('alumnos.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" id="nombre" value="{{ old('nombre') }}">
                @error('nombre')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="curso">Curso</label>
                <input type="text" class="form-control @error('curso') is-invalid @enderror" name="curso" id="curso" value="{{ old('curso') }}">
                @error('curso')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="nota1">Nota 1</label>
                <input type="number" class="form-control @error('nota1') is-invalid @enderror" name="nota1" id="nota1" step="0.1" value="{{ old('nota1') }}">
                @error('nota1')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="nota2">Nota 2</label>
                <input type="number" class="form-control @error('nota2') is-invalid @enderror" name="nota2" id="nota2" step="0.1" value="{{ old('nota2') }}">
                @error('nota2')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>
@endsection
