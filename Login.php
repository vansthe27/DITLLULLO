<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ingreso</title>
  <link rel="shortcut icon" href="../Imagenes/Logo1.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="p-3 m-0 border-0 bd-example" style="background-image: url(../Imagenes/Fondo.jpg);">

  <!-- BARRA DE NAVEGACIÓN -->
  <?php
  include("Navbar.php");
  ?>

  <div class="container">
    <br>
    <div class="row">

      <div class="col-md-4">
        <br>
        <h1 style="color:white;">Login</h1>
      </div>

      <div class="col-md-4">
        <br><br><br>

        <div class="card">
          <div class="card-header">
            Login
          </div>
          <div class="card-body">

            <form method="post">
              <div class="form-group">
                <label>Correo:</label>
                <input type="email" class="form-control" name="correo" placeholder="Escribe tu Correo" autofocus>
              </div>

              <div class="form-group">
                <label>Contraseña:</label>
                <input type="password" class="form-control" name="contraseña" placeholder="Escribe tu Contraseña">
              </div>

              <div class="d-grid gap-2 d-md-block">
                <a href="Index.PHP">
                  <button class="btn btn-success" type="button">Ingresar</button>
                </a>
                <a href="frmUsuarios.php">
                  <button class="btn btn-primary" type="button">Registrarse</button>
                </a>
              </div>


            </form>



          </div>

        </div>

      </div>

    </div>

  </div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>