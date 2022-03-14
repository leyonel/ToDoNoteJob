<?php
    include 'conexion_be.php';
    session_start();

   /*  $query = "SELECT * FROM usuarios ORDER BY rand() LIMIT 2";
    $ejecutar = mysqli_query($conexion, $query);

    while($rows=mysqli_fetch_array($ejecutar)){
        echo $rows[1]. "<br>";
    }  */

    if($conexion){
        $query = "SELECT * FROM equipos";
        $datos = mysqli_query($conexion, $query);
         if($datos->num_rows>0){
               $contador = 0;
                while($rows=mysqli_fetch_array($datos)){
                    $cant = $contador+=1;
                }
                
                } 
                $query = "SELECT * FROM equipos ORDER BY rand() LIMIT $cant";
                $ejecutar = mysqli_query($conexion, $query);
                $contador2 = 0;
               
                while($rows=mysqli_fetch_array($ejecutar)){

                    $cant1 = $contador2+=1;
                    $ide = $rows[0];
                    $usuario = $rows[1];
                    ?>
                <tr>
                    <td><?=  $cant1 ?></td>
                    <td><?=  $usuario ?></td>
                   
                 </tr>
                 <?php
         }
         


    }
?>