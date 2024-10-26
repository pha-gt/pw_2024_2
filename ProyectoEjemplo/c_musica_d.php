<?php
//CONSUMIR UN LA API GETGET
$url ='http://localhost:8080/pw_2024_2/ProyectoEjemplo/API/MelodiaAPI.php';
$json = file_get_contents($url);
$listada_canciones = json_decode($json);
//print_r($listada_canciones);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
<script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <!--<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>-->

    
    

</head>
<body>

<div class="m-4">

    <table  class="display table" id="mi_tabla_datos">
    <thead>
        <tr>
        <th scope="col">Titulo</th>
        <th scope="col">Artista</th>
        <th scope="col">Duracion</th>
        <th scope="col">Operaciones</th>
        </tr>
    </thead>
    <tbody>
        
        
        <?php

        foreach($listada_canciones as $cancion)
        {
            echo "<tr>
                    <th scope='row'>".$cancion->titulo."</th>
                    <td>".$cancion->artista."</td>
                    <td>".$cancion->duracion."</td>
                    <td>@mdo</td>
                </tr>";
               
            echo "<tr>
                    <th scope='row'>".$cancion->titulo."</th>
                    <td>".$cancion->artista."</td>
                    <td>".$cancion->duracion."</td>
                    <td>@mdo</td>
                </tr>";
            echo "<tr>
                <th scope='row'>".$cancion->titulo."</th>
                <td>".$cancion->artista."</td>
                <td>".$cancion->duracion."</td>
                <td>@mdo</td>
            </tr>";
            echo "<tr>
                <th scope='row'>".$cancion->titulo."</th>
                <td>".$cancion->artista."</td>
                <td>".$cancion->duracion."</td>
                <td>@mdo</td>
            </tr>";
            echo "<tr>
                <th scope='row'>".$cancion->titulo."</th>
                <td>".$cancion->artista."</td>
                <td>".$cancion->duracion."</td>
                <td>@mdo</td>
            </tr>";
            echo "<tr>
                <th scope='row'>".$cancion->titulo."</th>
                <td>".$cancion->artista."</td>
                <td>".$cancion->duracion."</td>
                <td>@mdo</td>
            </tr>";

        }

        ?>
    </tbody>
    </table>
</div>

<link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />
  
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>

<script>
    let table = new DataTable('#mi_tabla_datos');
</script>

    
</body>
</html>