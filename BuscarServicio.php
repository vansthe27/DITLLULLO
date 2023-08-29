<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios</title>
    <link rel="shortcut icon" href="Logo1.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="p-3 m-0 border-0 bd-example" style="background-image: url(FONDOS/Fondo50.jpg);">

    <!-- BARRA DE NAVEGACIÓN -->
    <?php
    include("Navbar.php");
    ?>

    <div class="container">
        <br><br>
        <h2 style="color: white;" class="centrado">Servicios disponibles</h2>
        <br>
        <button class="btn btn-success" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Agregar al carrito</button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasRightLabel">Carrito de Compras</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <h4>Servicios a comprar</h4>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="Construccion.jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Trabajo de <br> Construcción</h4>
                        <a name="" id="" class="btn btn-primary" href="frmSolicitudes.php" role="button">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="Salud.jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Servicios de <br> Salud</h4>
                        <a name="" id="" class="btn btn-primary" href="frmSolicitudes.php" role="button">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="Programacion.jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Servicios de Programación</h4>
                        <a name="" id="" class="btn btn-primary" href="frmSolicitudes.php" role="button">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="OtroServicio.jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Otras Ofertas de <br> Servicio</h4>
                        <a name="" id="" class="btn btn-primary" href="frmSolicitudes.php" role="button">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="Cerrajera.jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Trabajo de <br> Cerrajeria</h4>
                        <a name="" id="" class="btn btn-primary" href="frmSolicitudes.php" role="button">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="Electricista.jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Trabajo de<br>Electricista</h4>
                        <a name="" id="" class="btn btn-primary" href="frmSolicitudes.php" role="button">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="Ingeniero.jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Trabajo de <br>Ingeniero</h4>
                        <a name="" id="" class="btn btn-primary" href="frmSolicitudes.php" role="button">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="Mecanico.jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Trabajo de<br>Mecánico</h4>
                        <a name="" id="" class="btn btn-primary" href="frmSolicitudes.php" role="button">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>