<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistema encargado de crear una agenda de tareas o pendientes de manera individual por usuario">
    <meta name="keywords" content="notejob, tarea, sesion, administrativo, organigrama, organizar, agendar"/>
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="loginStyle.css">
    <title>Login</title>
</head>
<body>
<div class="container">
    <div class="l-form">
        <div class="shape1"></div>
        <div class="shape2"></div>

        <h1 class="title">NoteJob</h1>

        <div class="form">
             <img src="img/iconNotePad.png" alt="imagen de login" class="form_img"> 

            <form action="php/registro_usuario_be.php" method="POST" class="form_content">
                <h1 class="form_tittle">Registro</h1>

                <div class="form_div form_div-one focus">
                    <div class="form_icon">
                        <i class='bx bx-user-circle'></i>
                    </div>

                    <div class="form_div-input"> 
                        <label for="" class="form_label">Username</label>
                        <input type="text"  class="form_input" name="usuario">
                    </div>
                 </div>

                <div class="form_div">
                    <div class="form_icon">
                        <i class='bx bx-lock-open' ></i>
                    </div>

                    <div class="form_div-input">
                        <label for="" class="form_label">Password</label>
                        <input type="password"  class="form_input" name="contra">
                    </div>
                </div>

                <input type="submit" class="form_button" value="Registrarse">

                
            </form>

            <form action="php/login_usuario_be.php" method="POST" class="form_content">
                <h1 class="form_tittle">Login</h1>

                <div class="form_div form_div-one focus">
                    <div class="form_icon">
                        <i class='bx bx-user-circle'></i>
                    </div>

                    <div class="form_div-input"> 
                        <label for="" class="form_label">Username</label>
                        <input type="text"  class="form_input" name="usuario">
                    </div>
                 </div>

                <div class="form_div">
                    <div class="form_icon">
                        <i class='bx bx-lock-open' ></i>
                    </div>

                    <div class="form_div-input">
                        <label for="" class="form_label">Password</label>
                        <input type="password"  class="form_input" name="contra">
                    </div>
                </div>

                <input type="submit" class="form_button" value="Loggin">

                </div>
            </form>
        </div>

    </div>

</div>  
   
     <script src="login.js"></script>

    
</body>
</html>


