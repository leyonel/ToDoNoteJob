
<?php
   include 'php/conexion_be.php';
   session_start();
   if(!isset($_SESSION['usuario'])){
       echo '
          <script>
             alert("Por favor debes iniciar sesion");
             window.location="index.php";
          </script>

       ';

       session_destroy();
       die();
   }
   $user = $_SESSION['usuario'];
   $validar_usuario=mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$user'");
   $row=mysqli_fetch_row($validar_usuario);
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"><script src="https://kit.fontawesome.com/5bd33a9240.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="homeStyle.css">
    <title>Home</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark" id="navig">
     <div class="container">
     <ul class="navbar-nav ml-auto">
        <a class="navbar-brand">
             <img src="img/iconNotePad.png" alt="Logo" style="width: 5%;"> 
             NoteJob
        </a>

        
           
            <li class="nav-item">
                
                <a class="nav-link" href="php/cerrar_s.php">Cerrar Sesion</a>
            </li>
          </ul>
     </div>
    </nav>
    
   <div class="usuario-content">
   </div>
<main>
    
    <secction class="teamr" id="torneo">
        <div class="container">
        <h3 class="title">Crear Tarea</h1>

            <div class="team-form row">
                <div class="form-field col-md-12">
                <form action='php/tareas_be.php' method='post' enctype='multipart/form-data'>
                    <input type="text" class="input-text" name="titulo" id="name">
                    <label for="nombreEquipo" class="label">Título de Tarea</label>
                </div>
                <div class="form-field col-md-12">
                    <input type="text" class="input-text" name="descripcion" id="descripcion">
                    <label for="nombrecategoria" class="label">Descripcion</label>
                </div>
                <div class="form-field col-lg-12">
                    <button class="submit-btn"  name=""> Registrar </button>
                </form>
                   
                </div>
            </div>
        </div>
    </secction>

 
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <table class="table table-bordered table-hover">
                    <thead class='thead-dark'>
                        <tr>
                            <th class="titulosTareas">
                                Nombre de la Tarea
                            </th>
                            <th class="titulosTareas">
                                Descripcion
                            </th>
                            <th class="titulosTareas">
                                Status
                            </th >
                            <th class="titulosTareas">
                                Acciones
                            </th>
                         </tr>
                    </thead>


                    <?php
                        $validar_usuario=mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario ='$user'");
                        $row=mysqli_fetch_row($validar_usuario);
                        $query = "SELECT * FROM tareas WHERE usuario_id = $row[0] and estatus = 'pendiente'";
                
                        $ejecutar = mysqli_query($conexion, $query);
                
                        while($row=mysqli_fetch_array($ejecutar)){
                    ?>
                        
                        <tbody>
                            
                            <tr class="table-secondary">
                                <td><?php echo $row[1] ?></td>
                                <td><?php echo $row[2] ?></td>
                                <td><?php echo $row[3] ?></td>
                                <td>
                                    <button type="button" class="btn btn-danger" onclick="location.href='php/eliminar_tarea.php?<?php echo $row[0]?>'">Borrar</button>
                                    <button type="button" class="btn btn-info" onclick="location.href='php/enProgreso.php?<?php echo $row[0]?>'">En Progreso</button>
                                    <button type="button" class="btn btn-success" onclick="location.href='php/completado.php?<?php echo $row[0]?>'">Completado</button>
                                </td>             
                            </tr>
                            
                        </tbody>  

                    <?php
                        } 
                    ?>
                </table>
            </div>
            <div class="col-sm">
                <table class="table table-bordered table-hover">
                    <thead class=thead-dark>
                        <tr>
                            <th>
                                Nombre de la Tarea
                            </th>
                            <th>
                                Descripcion
                            </th>
                            <th>
                                Status
                            </th>
                            <th>
                                Acciones
                            </th>
                         </tr>
                    </thead>


                    <?php
                        $validar_usuario=mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario ='$user'");
                        $row=mysqli_fetch_row($validar_usuario);
                        $query = "SELECT * FROM tareas WHERE usuario_id = $row[0] and estatus = 'progreso' ";
                
                        $ejecutar = mysqli_query($conexion, $query);
                
                        while($row=mysqli_fetch_array($ejecutar)){
                    ?>
                        
                        <tbody>
                            
                            <tr class="table-secondary">
                                <td class= "contenido"><?php echo $row[1] ?></td>
                                <td class= "contenido"><?php echo $row[2] ?></td>
                                <td class= "contenido"><?php echo $row[3] ?></td>
                                <td class= "contenido">
                                    <button type="button" class="btn btn-danger" onclick="location.href='php/eliminar_tarea.php?<?php echo $row[0]?>'">Borrar</button>
                                    <button type="button" class="btn btn-success" onclick="location.href='php/completado.php?<?php echo $row[0]?>'">Completado</button>
                                </td>             
                            </tr>
                            
                        </tbody>  

                    <?php
                        } 
                    ?>
                </table>
            </div>
            <div class="col-sm">
                <table class="table table-bordered table-hover">
                    <thead class=thead-dark>
                        <tr>
                            <th>
                                Nombre de la Tarea
                            </th>
                            <th>
                                Descripcion
                            </th>
                            <th>
                                Status
                            </th>
                            <th>
                                Acciones
                            </th>
                         </tr>
                    </thead>


                    <?php
                        $validar_usuario=mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario ='$user'");
                        $row=mysqli_fetch_row($validar_usuario);
                        $query = "SELECT * FROM tareas WHERE usuario_id = $row[0] and estatus = 'completado' ";
                
                        $ejecutar = mysqli_query($conexion, $query);
                
                        while($row=mysqli_fetch_array($ejecutar)){
                    ?>
                        
                        <tbody>
                            
                            <tr class="table-secondary">
                                <td><?php echo $row[1] ?></td>
                                <td><?php echo $row[2] ?></td>
                                <td><?php echo $row[3] ?></td>
                                <td>
                                    <button type="button" class="btn btn-danger" onclick="location.href='php/eliminar_tarea.php?<?php echo $row[0]?>'">Borrar</button>
                                    <button type="button" class="btn btn-info" onclick="location.href='php/enProgreso.php?<?php echo $row[0]?>'">En Progreso</button>
                                </td>             
                            </tr>
                            
                        </tbody>  

                    <?php
                        } 
                    ?>
                </table>
            </div>
            
        </div>
    </div>

   
</main>
              
            
</body>
</html>