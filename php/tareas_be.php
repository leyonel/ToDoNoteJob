<?php

    include 'conexion_be.php';

    session_start();

    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $user = $_SESSION['usuario'];

    if (empty($titulo and $descripcion)) {
        echo '
        <script>
            alert("Es necesario llenar todos los campos");
            window.location="../tareas.php";
        </script>
        ';
        exit();
    }

    $validar_usuario=mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$user'");
    $row=mysqli_fetch_row($validar_usuario);


    $validar_torneo=mysqli_query($conexion, "SELECT * FROM tareas WHERE titulo='$titulo' and usuario_id=$row[0]");
    if(mysqli_num_rows($validar_torneo)>0){
        echo'
          <script>
              alert("Esta Tarea ya está registrado");
              window.location="../tareas.php";
          </script>
        ';
        exit();
      }
 


    $query = "INSERT INTO tareas(titulo, descripcion, usuario_id) 
    VALUES('$titulo', '$descripcion', $row[0])";

    $ejecutar = mysqli_query($conexion, $query);

    echo '
        <script>
        alert("Tarea registrado con éxito");
        window.location="../tareas.php";
       </script>

        ';
    
 



?>