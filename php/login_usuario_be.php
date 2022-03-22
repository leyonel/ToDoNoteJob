<?php

      session_start();
      
      include 'conexion_be.php';

      $usuario=$_POST['usuario'];
      $contra=$_POST['contra']; 
      
      $validar_login=mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario'");
      //Numero de Rows encontrados del validar_login, si existe va haber 1 fila, sino ps ninguna
      $numRows = mysqli_num_rows($validar_login);
      //Almacena las columnas del usario encontrado (si es que hay, pa)
      $buscarPass = mysqli_fetch_array($validar_login);

                            //password_verify compara la contra ingresada normal, con la cifrada
      if(($numRows == 1) && (password_verify($contra, $buscarPass['contra']))){
        $_SESSION['usuario']=$usuario;
           
        header("location: ../tareas.php");
        exit;
      }else{
        echo '
              <script>
                 alert("Usuario o Contraseña incorrecta, por favor verifique los datos introducidos");
                 window.location="../index.php";
              </script>
        ';
        exit;
        }


?>