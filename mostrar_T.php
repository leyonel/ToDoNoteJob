<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="homeStyle.css">
    <title>Hello, world!</title>
  </head>
  <secction class="teamr" id="equipo">
        <div class="container">
        <form action='php/equipos_be.php' method="POST" class="form_content">
          <h3 class="title">Registro de Equipo</h1>

        </form>
        </div>
    </secction>
  <body>
    <div class="container">
                <table class="table table-dark table-hover mt-2">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">equipo</th>
                    
                </tr>
            </thead>
            <tbody>


               <?php require_once 'php/mostrar.php' ?>
              
            </tbody>
            </table>
    <div>

    <secction class="teamr" id="equipo">
        <div class="container">
        <form action='php/equipos_be.php' method="POST" class="form_content">
          <h3 class="title">VS</h1>

        </form>
        </div>
    </secction>
    <div class="container">
                <table class="table table-dark table-hover mt-2">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">equipo</th>
                  
                </tr>
            </thead>
            <tbody>


               <?php require_once 'php/mostrarvs.php' ?>
              
            </tbody>
            </table>
    <div>

    <img src="img/Espadas.png" alt=""
                        class="img-fluid rounded mx-auto d-block" style="width: 20%;">
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>