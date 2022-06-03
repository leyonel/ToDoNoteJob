<?php
    include 'conexion_be.php';
    $query = "UPDATE tareas  SET estatus = 'completado' WHERE id = ${_SERVER['QUERY_STRING']}";
    $ejecutar = mysqli_query($conexion, $query);
    if($ejecutar){
        echo '
          <script>
               alert("Tarea Actualizada");
               window.location="../tareas.php";
          </script>
        ';
    }
    else{
        echo '
        <script>
        alert("Tarea no encontrada");
        window.location="../tareas.php";
       </script>

        ';
    }
    

    mysqli_close($conexion);
?>