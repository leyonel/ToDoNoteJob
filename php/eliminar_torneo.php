<?php
    include 'conexion_be.php';
    $query = "DELETE FROM tareas WHERE tareas.id = ${_SERVER['QUERY_STRING']} ";
    $ejecutar = mysqli_query($conexion, $query);
    if($ejecutar){
        echo '
          <script>
               alert("Tarea Eliminada");
               window.location="../torneos.php";
          </script>
        ';
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