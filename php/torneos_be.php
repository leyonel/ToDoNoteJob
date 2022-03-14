<?php

    include 'conexion_be.php';

    session_start();

    $titulo = $_POST['titulo'];
    $categoria = $_POST['categoria'];
    $fecha = $_POST['fecha'];
    $iduser = $_SESSION['usuario'];

    if (empty($titulo and $categoria and $fecha)) {
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


    $validar_torneo=mysqli_query($conexion, "SELECT * FROM torneos WHERE Título='$titulo'");
    if(mysqli_num_rows($validar_torneo)>0){
        echo'
          <script>
              alert("Este torneo ya está registrado");
              window.location="../torneos.php";
          </script>
        ';
        exit();
      }
 


    $query = "INSERT INTO torneos(Título, Categoría, Fecha_Inicio, Id_Usuario) 
    VALUES('$titulo', '$categoria', '$fecha', $row[0])";

    $ejecutar = mysqli_query($conexion, $query);

    echo '
        <script>
        alert("Torneo registrado con éxito");
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