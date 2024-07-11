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
        ESPALDA
    </h1>
    <div>
        <form action="{{ route('añadir') }}" method="GET" class="mt-3">
            <div class="my-5 mx-2 text-center">
                    <button type="submit" class="btn btn-primary" style="background-color :coral !important;">
                        Añadir
                    </button>                
            </div>
        </form>
    </div>
    <div class="container">
        <div class="col-12 mx-2">
            <table class="table table-bordered mt-3">
                <thead class="thead-dark">
                    <tr>
                        <th style="background-color :coral">
                            Dia
                        </th>
                        <th style="background-color :coral">
                            Ejercicio
                        </th>
                        <th style="background-color :coral">
                            Peso
                        </th>
                        <th style="background-color :coral">
                            Serie
                        </th>
                        <th style="background-color :coral">
                            Repeticiones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datos as $dato)
        <tr>
            <td>
                {{ $dato->fecha_realizado }}
            </td>
            <td>
                {{ $dato->ejercicio }}
            </td>
            <td>
                {{ $dato->peso }}
            </td>
            <td>
                {{ $dato->serie }}
            </td>
            <td>
                {{ $dato->repeticiones }}
            </td>
        </tr>
                   @endforeach
                </tbody>
            </table>   
        </div>
    </div>
</body>
</html>

