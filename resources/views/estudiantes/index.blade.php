<!DOCTYPE html>
<html>
<head>
    <title>Lista de Estudiantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Lista de Estudiantes</h1>
        <a href="{{ route('estudiantes.create') }}" class="btn btn-primary mb-3">
            Crear Nuevo Estudiante
        </a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>CI</th>
                    <th>Edad</th>
                    <th>Fecha Nacimiento</th>
                    <th>Email</th>

                </tr>
            </thead>
            <tbody>
                @foreach($estudiantes as $estudiante)
                <tr>
                    <td>{{ $estudiante->id_estudiante }}</td>
                    <td>{{ $estudiante->nombres }}</td>
                    <td>{{ $estudiante->apellidos }}</td>
                    <td>{{ $estudiante->ci }}</td>
                    <td>{{ $estudiante->edad }}</td>
                    <td>{{ $estudiante->fecha_nacimiento }}</td>
                    <td>{{ $estudiante->email }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>