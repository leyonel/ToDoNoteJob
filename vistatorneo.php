<?php

    include 'php/conexion_be.php';
   // $conexion = mysqli_connect("localhost","root","", "challengueweb");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5bd33a9240.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="homeStyle.css">
    <title>Vista Torneo</title>
</head>
<body>
    
    <secction class="teamr" id="equipo">
        <div class="container">
        <form action='php/equipos_be.php?<?php echo $_SERVER['QUERY_STRING']?>' method="POST" class="form_content"> 
        <h3 class="title">Registro de Equipo</h1>

            <div class="team-form row">
                <div class="form-field col-md-12">
                    <input type="text" class="input-text" id="name" name="name">
                    <label for="nombreEquipo" class="label">Nombre del Equipo</label>
                </div>
                <div class="form-field col-lg-12">
                    <button class="submit-btn"   name=""> Registrar </button>
                </div>
            </div>
        </form>
        </div>
    </secction>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-hover">
                    <thead class=thead-dark>
                        <tr>
                            <th>
                                Nombre del Equipo
                            </th>
                            <th>
                            </th>
                        </tr>
                    </thead>

                    <?php
                        // ES EL SELECT DE LA TABLA
                        $sql="SELECT * from equipos WHERE equipos.Id_Torneo = ${_SERVER['QUERY_STRING']}";

                        $result=mysqli_query($conexion, $sql);

                        while($mostrar=mysqli_fetch_array($result)){
                    ?>
                        
                        <tbody>
                            <tr class="table-secondary">
                                <td><?php echo $mostrar['Nombre_Equipo'] ?></td>
                                <td><button type="button" class="btn btn-danger" onclick="location.href='php/eliminar_equipo.php?<?php echo $mostrar['id']?>?<?php echo $_SERVER['QUERY_STRING']?>'">Borrar</button></td>      

                            </tr>
                        </tbody>  

                    <?php
                        } 
                    ?>
                </table>
            </div>
        </div>
    </div>


    <div class="container mt-5 text-center justify-content-center align-self-center">
          <button class="btn-enfren btn-lg"  onclick="location.href='mostrar_T.php?<?php echo $_SERVER['QUERY_STRING']?>'" name=""> Empezar Enfrentamientos </button>
        </div>
    </div>

     
        

    </table>


</body>
</html>