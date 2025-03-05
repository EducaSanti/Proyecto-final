<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../../public/icons/icono.ico" type="image/x-icon">
  <link rel="stylesheet" href="../../public/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../styles/login.css">
  <title>IniciarSesión - Firestage</title>
</head>

<body class="d-flex flex-column min-vh-100">
  <nav class="navbar fixed-top navbar-expand-lg" style="background-color: #FFFF;">
    <div class="container-fluid">
      <a class="navbar-brand" href="../../index.php">
        <img src="../../public/icons/logo.png" alt="logo" width="300">
      </a>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="nav justify-content-end">
          <li class="nav-item">
            <a class="nav-link" href="../../index.php">INICIO</a>
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
  <main class="container flex-grow-1 d-flex justify-content-center align-items-center">
    <!-- From Uiverse.io by glisovic01 -->
    <div class="login-box">
      <p>Iniciar Sesión</p>
      <form id="miFormulario" action="../../server/controllers/autorizarInicioSesion.php" method="post">
        <div class="user-box">
          <input required="" name="email" type="text">
          <label>Email</label>
        </div>
        <div class="user-box">
          <input required="" name="contrasena" type="password">
          <label>Contraseña</label>
        </div>
        <a href="#" onclick="enviarFormulario()">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          Enviar
        </a>
      </form>
      <p>¿No tienes una cuenta? <a href="./registrarse.php" class="a2">Registrate!</a></p>
    </div>
  </main>

  <footer class="bg-white text-black text-center py-3">
    © 2025 FireStage - Todos los derechos reservados
  </footer>
  <script src="./public/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function enviarFormulario() {
      document.getElementById("miFormulario").submit();
    }
  </script>

</html>