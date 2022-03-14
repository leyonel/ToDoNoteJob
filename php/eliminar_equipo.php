<?php
    include 'conexion_be.php';
    $identificadores = explode("?", $_SERVER['QUERY_STRING']);
    $equipo_id = $identificadores[0];
    $torneo_id = $identificadores[1];
    $query = "DELETE FROM equipos WHERE Id = $equipo_id";
    $ejecutar = mysqli_query($conexion, $query);
    if($ejecutar){
        echo '
          <script>
               alert("equipo Eliminado");
          </script>
        ';
        $ruta = "http://localhost/ProyectoTorneo/vistatorneo.php?$torneo_id";
        header("Location: $ruta");
    }
    else{
        echo '
        <script>
        alert("Torneo no encontrado");
        window.location="../index.php";
       </script>

        ';
    }
    

    mysqli_close($conexion);
?>