<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIMNASIO</title>
    <!-- Incluir Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1 class="my-5 mx-2 text-center">
        AÑADIR
    </h1>
    <div class="container">
        
    </div>
    <div>
        <form action="{{ route('nuevo') }}" method="post" class="mt-3">
            @csrf
            <div class="my-3 mx-2 text-center">
                <label for="exercise_type">Tipo de Ejercicio:</label>
                <select name="exercise_type" id="exercise_type" class="form-control">
                    <option value="espalda">Espalda</option>
                    <option value="hombro">Hombro</option>
                    <option value="pecho">Pecho</option>
                    <option value="biceps">Bíceps</option>
                    <option value="triceps">Tríceps</option>
                    <option value="pierna">Pierna</option>
                </select>
            </div>
            
            <div class="my-3 mx-2 text-center">
                <label for="ejercicio">Ejercicio:</label>
                <input type="text" name="ejercicio" id="ejercicio" class="form-control" required>
            </div>

            <div class="my-3 mx-2 text-center">
                <label for="peso">Peso:</label>
                <input type="number" name="peso" id="peso" class="form-control" step="0.01" required>
            </div>
            <div class="my-3 mx-2 text-center">
                <label for="serie">Serie:</label>
                <input type="number" name="serie" id="serie" class="form-control" required>
            </div>
            
            <div class="my-3 mx-2 text-center">
                <label for="repeticiones">Repeticiones:</label>
                <input type="number" name="repeticiones" id="repeticiones" class="form-control" required>
            </div>
            
            <div class="my-5 mx-2 text-center">
                <button type="submit" class="btn btn-primary" style="background-color :coral !important;">
                    Añadir
                </button>
            </div>
        </form>
    </div>
</body>
</html>