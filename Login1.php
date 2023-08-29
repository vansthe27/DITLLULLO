<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ingreso</title>

  <link rel="shortcut icon" href="Logo1.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="p-3 m-0 border-0 bd-example" style="background-image: url(FONDOS/Fondo50.jpg);">


  <?php
  

  ?>

  <section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block" style="background-color:black;">
                <img src="Logo1.png" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center" style="background-color:grey;">
                <div class="card-body p-4 p-lg-5 text-white">

                  <form action="Login1.php" method="post">

                   

                    <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                      <span class="h1 fw-bold mb-0">DITLULLO</span>
                    </div>

                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Ingresa a tu cuenta</h5>

                    <div class="form-outline mb-4">
                      <input type="email" id="form2Example17" name="correo" class="form-control form-control-lg" />
                      <label class="form-label" for="form2Example17">Correo:</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="password" id="form2Example27" name="clave" class="form-control form-control-lg" />
                      <label class="form-label" for="form2Example27">Contraseña</label>
                    </div>

                    <div class="pt-1 mb-4">
                      <a href="index.PHP">
                        <button class="btn btn-success btn-lg btn-block" type="button">Ingresar</button>
                      </a>
                    </div>

                    <a class="small text" href="#!">Olvido su contraseña?</a>
                    <p class="mb-5 pb-lg-2" style="color: white;">No tienes cuenta? <a href="frmUsuarios.php" style="color: white;">Registrate aquí</a></p>
                    <p class="mb-5 pb-lg-2" style="color: white;"><a href="index.php" style="color: white;">Volver</a></p>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>