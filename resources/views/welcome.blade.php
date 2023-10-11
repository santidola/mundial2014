<?php
$grupos = [
    [
        "Grupo" => "A",
        "Equipos" => ["Brasil", "Croacia", "México", "Camerún"]
    ],
    [
        "Grupo" => "B",
        "Equipos" => ["España", "Países Bajos", "Chile", "Australia"]
    ],
    [
        "Grupo" => "C",
        "Equipos" => ["Colombia", "Grecia", "Costa de Marfil", "Japón"]
    ],
    [
        "Grupo" => "D",
        "Equipos" => ["Uruguay", "Costa Rica", "Inglaterra", "Italia"]
    ],
    [
        "Grupo" => "E",
        "Equipos" => ["Suiza", "Ecuador", "Francia", "Honduras"]
    ],
    [
        "Grupo" => "F",
        "Equipos" => ["Argentina", "Bosnia y Herzegovina", "Irán", "Nigeria"]
    ],
    [
        "Grupo" => "G",
        "Equipos" => ["Alemania", "Portugal", "Ghana", "Estados Unidos"]
    ],
    [
        "Grupo" => "H",
        "Equipos" => ["Bélgica", "Argelia", "Rusia", "Corea del Sur"]
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
   <div class ="text-center d-flex title">
        <h1 class="text-dark text-center">Mundial  </h1>
        <h4 class="text-body text-center">Brasil</h4>
        <h4 class="text-success text-center">20<h4 class="text-warning text-center">14</h4></h4>
        
    </div>
    <section class="grid">
        @foreach ($grupos as $grupo)
        <div class="box bg-secondary p-3" id="A">
            <div class="bg-success">
                <h2 class="text-center">{{$grupo['Grupo']}}</h2>

            </div>
            <div class="equipos">
                @foreach ($grupo['Equipos'] as $equipo)
                <div>
                    <span>{{$equipo}}</span>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </section>
</body>

</html>