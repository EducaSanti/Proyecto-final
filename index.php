<?php
include("./server/config/conexionBD.php");

conexionBaseDatos();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./public/icons/icono.ico" type="image/x-icon">
  <link rel="stylesheet" href="./src/styles/pagPrincipal.css">
  <link rel="stylesheet" href="./public/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/css/bootstrap.min.css">
  <title>Inicio-Firestage</title>
</head>

<body>
  <nav class="navbar fixed-top navbar-expand-lg" style="background-color: #FFFF;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="./public/icons/logo.png" alt="logo" width="300">
      </a>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="nav justify-content-end">
          <li class="nav-item">
            <a class="nav-link" href="#">INICIO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">ABOUT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">MESAS VIP</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">ENTRADAS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">EVENTOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">CONTACTO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">SOPORTE</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <main>
    <section class="sec-principal">
      <h1  class="titulo-section-principal">UNA EXPERIENCIA INOLVIDABLE</h1>
    </section>
    <section class="ct sec-sobre-nosotros">
      <h1 class="titulo-section">
        Sobre Nosotros
      </h1>
      <p class="parrafo-section">
        Firestage es la discoteca más emblemática de Madrid, estilos cuidadosamente diseñados y géneros musicales diversos. Estratégicamente ubicada en el corazón del triángulo de arte, cerca de los museos más importantes de la ciudad. Una propuesta elegante y exclusiva que ha cautivado a millones de personas, convirtiéndonos en un referente internacional de la cultura nocturna.
      </p>
    </section>
    <section class="ct sec-eventos">
      <h1 class="titulo-section">Eventos</h1>
    </section>
    <section class="ct sec-ptos">
      <h1 class="titulo-section">
        Puntos Por Consumiciones
      </h1>
    </section>
    <section class="ct sec-premios">
      <h1 class="titulo-section">Premios
      </h1>
    </section>
  </main>
  <script src="./public/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>