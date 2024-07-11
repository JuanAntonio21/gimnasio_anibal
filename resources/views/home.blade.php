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
    <div style="min-height: 100vh;" class="container d-flex justify-content-center align-items-center">
         <div class="m-auto row">
        <div class="row col-12 mt-4">
            <div class="col-md-4  text-center">
                <div class="card" style="width: 18rem;">
                    
                        <div class="card-body">
                            <h5 class="card-title">Espalda</h5>
                            <form action="{{ route('espalda') }}" method="GET">
                                @csrf
                                <button type="submit" class="btn" style="background-color :coral; color:aliceblue">Ir</button>
                            </form>
                        </div>
                </div>
            </div>
            
            <div class="col-md-4  text-center">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Pecho</h5>
                      <form action="{{ route('pecho') }}" method="GET">
                                @csrf
                                <button type="submit" class="btn" style="background-color :coral; color:aliceblue">Ir</button>
                            </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4  text-center">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Pierna</h5>
                      <form action="{{ route('pierna') }}" method="GET">
                                @csrf
                                <button type="submit" class="btn" style="background-color :coral; color:aliceblue">Ir</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row col-12  mt-4">
            <div class="col-md-4 text-center ">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Biceps</h5>
                      <form action="{{ route('biceps') }}" method="GET">
                                @csrf
                                <button type="submit" class="btn" style="background-color :coral; color:aliceblue">Ir</button>
                            </form>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4  text-center">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Triceps</h5>
                      <form action="{{ route('triceps') }}" method="GET">
                                @csrf
                                <button type="submit" class="btn" style="background-color :coral; color:aliceblue">Ir</button>
                            </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4  text-center">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Hombro</h5>
                      <form action="{{ route('hombro') }}" method="GET">
                                @csrf
                                <button type="submit" class="btn" style="background-color :coral; color:aliceblue">Ir</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>
