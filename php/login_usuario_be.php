<?php

      session_start();
      
      include 'conexion_be.php';

      $usuario=$_POST['usuario'];
      $contra=$_POST['contra']; 

      $validar_login=mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario'
                                 and contra='$contra'");

      if(mysqli_num_rows($validar_login)>0){
          $_SESSION['usuario']=$usuario;
           
          header("location: ../torneos.php");
          exit;
      }
      else{
          echo '
                <script>
                   alert("Usuario o Contraseña incorrecta, por favor verifique los datos introducidos");
                   window.location="../index.php";
                </script>
          ';
          exit;
      }

?>