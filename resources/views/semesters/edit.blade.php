<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #333;
            padding: 1rem;
        }

        .navbar ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: space-around;
        }

        .navbar ul li {
            margin: 0;
        }

        .navbar ul li a {
            color: white;
            text-decoration: none;
            padding: 0.5rem 1rem;
            display: inline-block;
        }

        .navbar ul li a:hover {
            background-color: #575757;
            border-radius: 5px;
        }

        section {
            padding: 2rem;
        }

        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1rem;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>

    <nav class="navbar">
        <ul>
            <li><a href="{{ route('home') }}">Inicio</a></li>
            <li><a href="{{ route('shifts.index') }}">Turnos</a></li>
            <li><a href="{{ route('semesters.index') }}">Semestres</a></li>
            <li><a href="{{ route('groups.index') }}">Grupos</a></li>
            <li><a href="{{ route('students.index') }}">Estudiantes</a></li>
            <li><a href="{{ route('inscriptions.index') }}">Inscripciones</a></li>
        </ul>
    </nav>

    <section>
        <div class="container mt-5">
            <h1>Editar turno</h1>
            <form action="{{ route('semesters.update', $semester->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name">Nombre del semestre:</label>
                    <input type="text" name="name" id="name" class="form-control"
                        value="{{ old('name', $semester->name) }}" placeholder="Ejemplo: Primer semestre">
                    @if ($errors->has('name'))
                        <p class="text-danger">{{ $errors->first('name') }}</p>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="name">Número del semestre:</label>
                    <input type="number" name="number" id="number" class="form-control"
                        value="{{ old('number', $semester->number) }}" placeholder="Ejemplo: 1">
                    @if ($errors->has('number'))
                        <p class="text-danger">{{ $errors->first('number') }}</p>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </section>

    <footer class="footer">
        <p>&copy; 2025. Todos los derechos reservados.</p>
    </footer>
</body>

</html>
