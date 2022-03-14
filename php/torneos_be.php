<?php

    include 'conexion_be.php';

    session_start();

    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $iduser = $_SESSION['usuario'];

    if (empty($titulo and $descripcion)) {
        echo '
        <script>
            alert("Es necesario llenar todos los campos");
            window.location="../torneos.php";
        </script>
        ';
        exit();
    }

    $validar_usuario=mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$iduser'");
    $row=mysqli_fetch_row($validar_usuario);


    $validar_torneo=mysqli_query($conexion, "SELECT * FROM tareas WHERE titulo='$titulo'");
    if(mysqli_num_rows($validar_torneo)>0){
        echo'
          <script>
              alert("Esta Tarea ya está registrado");
              window.location="../torneos.php";
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
        window.location="../torneos.php";
       </script>

        ';
    
    /* $query = "SELECT * FROM equipos ORDER BY rand() LIMIT 2";
    $ejecutar = mysqli_query($conexion, $query);

    while($rows=mysqli_fetch_array($ejecutar)){
        echo "<input type='text' value='$rows[1]' disabled><br><br>"; 
        }

    function calcularVs(){

    
        
    } */



?>