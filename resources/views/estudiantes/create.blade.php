<!DOCTYPE html>
<html>
<head>
    <title>Crear Nuevo Estudiante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Crear Nuevo Estudiante</h1>
        <form action="{{ route('estudiantes.store') }}" method="POST">
            @csrf
            
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Nombres</label>
                        <input type="text" class="form-control" id="nombres" name="nombres" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Apellidos</label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label  class="form-label">Cédula de Identidad</label>
                        <input type="number" class="form-control" id="ci" name="ci" required min="0" max="9999999999"
                               placeholder="10 dígitos sin puntos ni guiones">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label  class="form-label">Edad</label>
                        <input type="number" class="form-control" id="edad" name="edad" required min="1" max="120">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento"required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email"required>
                    </div>
                </div>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-success me-md-2">
                    <i class="fas fa-save"></i> Guardar Estudiante
                </button>
                <a href="{{ route('estudiantes.index') }}" class="btn btn-secondary">
                    <i class="fas fa-times"></i> Cancelar
                </a>
            </div>
        </form>
    </div>
    </script>
</body>
</html>