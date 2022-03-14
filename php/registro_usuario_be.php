<?php
    include 'conexion_be.php';

    $usuario = $_POST['usuario'];
    $contra = $_POST['contra'];

    if(empty($usuario and $contra)){
      echo '
      <script>
        alert("Introduce caracteres válidos para las credenciales de usuario y contraseña");
        window.location="../index.php";
      </script>
      ';
      exit();
    }

    $query = "INSERT INTO usuarios(usuario, contra) 
            VALUES('$usuario', '$contra')";

    $verificar_usuario = mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario='$usuario' ");
    
    if(mysqli_num_rows($verificar_usuario)>0){
        echo'
          <script>
              alert("Este usuario ya esta registrado");
              window.location="../index.php";
          </script>
        ';
        exit();
      }

    
    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
          <script>
               alert("Usuario registrado");
               window.location="../index.php";
          </script>
        ';
    }
    else{
        echo '
        <script>
        alert("Usuario NO almacenado, FAKET");
        window.location="../index.php";
       </script>

        ';
    }
    

    mysqli_close($conexion);
?>