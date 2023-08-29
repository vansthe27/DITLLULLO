<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Solicitudes</title>
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
                <h2 class="centrado">Formulario de Solicitudes</h2>

                <form action="RegSolicitudes.php" method="post">

                    <!-- <div class="form-group">
                        <label for="id">ID:</label>
                        <input type="number" name="id" id="id" class="form-control" required autofocus>
                    </div> -->
                    <div class="form-group">
                        <label for="fecha">Fecha:</label>
                        <input type="date" name="fecha" id="fecha" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio:</label>
                        <input type="number" name="precio" id="precio" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="observ">Observación:</label>
                        <input type="text" name="observ" id="observ" class="form-control">
                    </div>
                    <div class="form-group">
                        <select class="form-select" aria-label="Default select example" name="CedulaUsuario" required>
                            <option selected>Cedula Usuario</option>
                            <option value="1">123</option>
                            <option value="2">456</option>
                            <option value="3">789</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-select" aria-label="Default select example" name="servicios" required>
                            <option selected>Id Servicios</option>
                            <option value="1">100</option>
                            <option value="2">200</option>
                            <option value="3">300</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="estado">Estado:</label>
                        <input type="text" name="estado" id="estado" class="form-control">
                    </div>

                    <div class="d-grid gap-2 col-7 mx-auto">
                        <button class="btn btn-success" type="submit" name="btn">Enviar</button>
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