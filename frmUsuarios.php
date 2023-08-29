<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Usuarios</title>
    <link rel="shortcut icon" href="Logo1.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="p-3 m-0 border-0 bd-example" style="background-image: url(FONDOS/Fondo50.jpg); color:white" ;>

    <!-- BARRA DE NAVEGACIÓN -->
    <?php
    include("Navbar.php");
    ?>

    <div class="container my-3">
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <h2 class="centrado">Formulario de Usuarios</h2>

                <form action="RegUsuarios.php" method="post">

                    <div class="form-group">
                        <label for="cedula">Cedula:</label>
                        <input type="number" name="cedula" id="cedula" class="form-control" required placeholder="Ingresa tu Documento" autofocus>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" required placeholder="Ingresa tu Nombre">
                    </div>
                    <div class="form-group">
                        <label for="apellido">Apellido:</label>
                        <input type="text" name="apellido" id="apellido" class="form-control" required placeholder="Ingresa tu Apellido">
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo:</label>
                        <input type="email" name="correo" id="correo" class="form-control" required value="@gmail.com">
                    </div>
                    <div class="form-group">
                        <label for="ocupacion">Ocupación:</label>
                        <input type="text" name="ocupacion" id="ocupacion" class="form-control" required placeholder="Ingresa tu Ocupación">
                    </div>
                    <div class="form-group">
                        <label for="estudios">Estudios:</label>
                        <input type="text" name="estudios" id="estudios" class="form-control" placeholder="Ingresa tus Estudios">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción:</label>
                        <input type="text" name="descripcion" id="descripcion" class="form-control" placeholder="Ingresa una Descripción">
                    </div>
                    <div class="form-group">
                        <label for="celular">Celular:</label>
                        <input type="number" name="celular" id="celular" class="form-control" required placeholder="Ingresa tu Celular">
                    </div>
                    <div class="form-group">
                        <label for="telefono">Teléfono:</label>
                        <input type="tel" name="telefono" id="telefono" class="form-control" placeholder="Ingresa tu Teléfono">
                    </div>
                    <div class="form-group">
                        <label for="direccion">Dirección:</label>
                        <input type="text" name="direccion" id="direccion" class="form-control" required placeholder="Ingresa tu Dirección">
                    </div>
                    <div class="form-group">
                        <label for="clave">Contraseña:</label>
                        <input type="password" name="clave" id="clave" class="form-control" required placeholder="Ingresa una Contraseña">
                    </div>


                    <div class="d-grid gap-2 col-7 mx-auto">
                        <button class="btn btn-success" type="submit" name="btn">Guardar</button>
                        <button class="btn btn-primary" type="reset">Borrar</button>
                    </div>
                </form>
            </div>
            <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
                <br>
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="Electricista.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="Programadora.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="Mecanico.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="Cerrajera.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="Ingeniero.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Siguiente</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>