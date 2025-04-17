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
            <h1>Crear inscripción</h1>
            <form action="{{ route('inscriptions.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name">Grupo:</label>
                    <select name="id_group" id="id_group" class="form-control">
                        <option value="">Seleccione un grupo</option>
                        @foreach ($groups as $group)
                            <option value="{{ $group->id }}">{{ $group->semester->name }}: {{ $group->name }}
                                ({{ $group->shift->name }})
                            </option>
                        @endforeach
                    </select>
                    @if ($errors->has('id_group'))
                        <p class="text-danger">{{ $errors->first('id_group') }}</p>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="name">Estudiante:</label>
                    <select name="id_student" id="id_student" class="form-control">
                        <option value="">Seleccione un estudiante</option>
                        @foreach ($students as $student)
                            <option value="{{ $student->id }}">{{ $student->enrollment }}: {{ $student->name }}
                                {{ $student->maternal_surname }} {{ $student->paternal_surname }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('id_student'))
                        <p class="text-danger">{{ $errors->first('id_student') }}</p>
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
