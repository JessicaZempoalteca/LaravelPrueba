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
            <h1>Registrar estudiante</h1>
            <form action="{{ route('students.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="enrollment">Matrícula del estudiante:</label>
                    <input type="text" name="enrollment" id="enrollment" class="form-control"
                        value="{{ old('enrollment') }}" placeholder="Ejemplo: ZFMJIS3225">
                    @if ($errors->has('enrollment'))
                        <p class="text-danger">{{ $errors->first('enrollment') }}</p>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="name">Nombre del estudiante:</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}"
                        placeholder="Ejemplo: Jessica">
                    @if ($errors->has('name'))
                        <p class="text-danger">{{ $errors->first('name') }}</p>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="maternal_surname">Apellido materno del estudiante:</label>
                    <input type="text" name="maternal_surname" id="maternal_surname" class="form-control"
                        value="{{ old('maternal_surname') }}" placeholder="Ejemplo: Zempoalteca">
                    @if ($errors->has('maternal_surname'))
                        <p class="text-danger">{{ $errors->first('maternal_surname') }}</p>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="paternal_surname">Apellido paterno del estudiante:</label>
                    <input type="text" name="paternal_surname" id="paternal_surname" class="form-control"
                        value="{{ old('paternal_surname') }}" placeholder="Ejemplo: Flores">
                    @if ($errors->has('paternal_surname'))
                        <p class="text-danger">{{ $errors->first('paternal_surname') }}</p>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="birth_date">Fecha de nacimiento:</label>
                    <input type="date" name="birth_date" id="birth_date" class="form-control"
                        value="{{ old('birth_date') }}">
                    @if ($errors->has('birth_date'))
                        <p class="text-danger">{{ $errors->first('birth_date') }}</p>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="email">Correo electrónico:</label>
                    <input type="email" name="email" id="email" class="form-control"
                        value="{{ old('email') }}" placeholder="Ejemplo: jessm@email.com">
                    @if ($errors->has('email'))
                        <p class="text-danger">{{ $errors->first('email') }}</p>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="phone">Teléfono:</label>
                    <input type="text" name="phone" id="phone" class="form-control"
                        value="{{ old('phone') }}" placeholder="Ejemplo: 5649063441">
                    @if ($errors->has('phone'))
                        <p class="text-danger">{{ $errors->first('phone') }}</p>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </section>
    <br><br><br>
    <footer class="footer">
        <p>&copy; 2025. Todos los derechos reservados.</p>
    </footer>
</body>

</html>
