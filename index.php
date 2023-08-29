<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DITLLULLO</title>
  <link rel="stylesheet" href="CSS/Style.css">
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
    <br>
    <script src="https://kit.fontawesome.com/c36cb32bff.js" crossorigin="anonymous"></script>
    <div class="col-xs-12">
      <h1 style="color: white;">Bienvenidos a DITLLULLO</H1>
      <div class="card">
        <div class="card-body">
          En DITLLULLO, nos enorgullece ofrecer una amplia gama de servicios diseñados para satisfacer tus necesidades. Ya sea que estés buscando asesoramiento profesional, servicios creativos o soluciones técnicas, estamos aquí para ayudarte.
          Encontrarás una variedad de servicios en nuestro catálogo, desde consultoría empresarial, desarrollo web, salud y sector de la construcción, gestión de proyectos y mucho más. Sea cual sea tu proyecto o desafío, puedes contar con nosotros para ofrecerte un servicio integral y de alta calidad.
        </div>
      </div>
    </div>
    <br>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-8 col-lg-4 col-xl-4">
          <div class="prueba">
            <section>
              <img class="imagen" src="Cerrajera.jpg" alt="">
              <img class="imagen" src="Ingeniero.jpg" alt="">
              <img class="imagen" src="Mecanico.jpg" alt="">
              <img class="imagen" src="Programadora.jpg" alt="">
              <img class="imagen" src="Salud.jpg" alt="">
            </section>
          </div>
        </div>
        <div class="col-sm-12 col-md-8 col-lg-4 col-xl-8">
          <div class="prueba">
            <section>
              <img class="imagen" src="Albañil.jpg" alt="">
              <img class="imagen" src="Arquitecto.jpg" alt="">
              <img class="imagen" src="Doctora.jpg" alt="">
              <img class="imagen" src="Programadora.jpg" alt="">
              <img class="imagen" src="Salud.jpg" alt="">
            </section>
          </div>
        </div>
      </div>
    </div>
    <hr style="color:white;">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="Construccion.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5 style="color: black;">Servicios de Construcción</h5>
            <p style="color: black;">Todo lo relacionado con la Contruccíon y oficios varios.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="Programacion.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Servicios de Programación</h5>
            <p>Todo lo relacionado con la creación de páginas web y desarrollo de Software.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="Salud.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5 style="color: black;">Servicios de Salud</h5>
            <p style="color: black;">Todo lo relacionado con consultas médicas, enfermeria y afines.</p>
          </div>
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
    <hr style="color:white;">
    <div style="text-align: center;" class="alert alert-success" role="alert">
      Quizás te interese!
    </div>
    <div class="card-group">
      <div class="card">
        <img src="Mecanico.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Estamos en busqueda de un Mecánico Automotriz</h5>
          <p class="card-text">Aplica a esta oferta, si te interesa el trabajo</p>
          <a name="" id="" class="btn btn-primary" href="frmSolicitudes.php" role="button">Aplicar</a>
        </div>
        <div class="card-footer">
          <small class="text-muted">Última actualización hace 3 minutos</small>
        </div>
      </div>
      <div class="card">
        <img src="Programadora.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Estamos en busqueda de un programador web</h5>
          <p class="card-text">Aplica a esta oferta, si te interesa el trabajo</p>
          <a name="" id="" class="btn btn-primary" href="frmSolicitudes.php" role="button">Aplicar</a>
        </div>
        <div class="card-footer">
          <small class="text-muted">Última actualización hace 3 minutos</small>
        </div>
      </div>
      <div class="card">
        <img src="Cerrajera.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Estamos en busqueda de un@ cerrajero</h5>
          <p class="card-text">Aplica a esta oferta, si te interesa el trabajo</p>
          <a name="" id="" class="btn btn-primary" href="frmSolicitudes.php" role="button">Aplicar</a>
        </div>
        <div class="card-footer">
          <small class="text-muted">Última actualización hace 3 minutos</small>
        </div>
      </div>
    </div>
    <hr style="color:white;">

  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- BARRA DE FOOTER -->
  <?php
  include("Footer.php");
  ?>

</body>

</html>