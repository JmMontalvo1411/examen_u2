<!DOCTYPE html>
<html>
<head>
    <title>Gestión de Alumnos</title>
</head>
<body>
    <nav>
        <a href="{{ route('alumnos.index') }}">Listado</a>
        <a href="{{ route('alumnos.create') }}">Ingreso</a>
    </nav>
    @yield('content')
</body>
</html>
