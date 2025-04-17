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

        /* Navegación */
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

        /* Contenido principal */
        section {
            padding: 2rem;
        }

        table {
            text-align: center;
        }

        /* Pie de página */
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

    <!-- Contenido principal -->
    <section id="home">
        <div class="container mt-5">
            <h1>SEMESTRES</h1>
            <a href="{{ route('semesters.create') }}" class="btn btn-primary">Crear nuevo semestre</a>
            <br><br>
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Nombre del semestre</th>
                    <th>Número de semestre</th>
                    <th>Acciones</th>
                </tr>
                @foreach ($semesters as $semester)
                    <tr>
                        <td>{{ $semester->id }}</td>
                        <td>{{ $semester->name }}</td>
                        <td>{{ $semester->number }}</td>
                        <td>
                            <a href="{{ route('semesters.edit', $semester->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('semesters.destroy', $semester->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </section>

    <!-- Pie de página -->
    <footer class="footer">
        <p>&copy; 2025. Todos los derechos reservados.</p>
    </footer>
</body>

</html>
