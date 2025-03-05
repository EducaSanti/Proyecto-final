<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../../public/icons/icono.ico" type="image/x-icon">
  <link rel="stylesheet" href="../../public/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../styles/registro.css">
  <title>Registrarse - Firestage</title>
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
    <!-- From Uiverse.io by ammarsaa -->
    <form class="form" action="../../server/controllers/anadirRegistro.php" method="post">
      <p class="title">Registrarse </p>
      <p class="message">Regístrate ahora y obtén acceso completo a nuestra aplicación.</p>
      <div class="flex">
        <label>
          <input class="input" type="text" name="nombre" placeholder="" required="">
          <span>Nombre</span>
        </label>

        <label>
          <input class="input" type="text" name="apellidos" placeholder="" required="">
          <span>Apellidos</span>
        </label>
      </div>

      <label>
        <input class="input" type="email" name="email" placeholder="" required="">
        <span>Email</span>
      </label>

      <label>
        <input class="input" type="password" name="contrasena" placeholder="" required="">
        <span>Contraseña</span>
      </label>
      <label>
        <input class="input" type="password" placeholder="" required="">
        <span>Confirmar contraseña</span>
      </label>
      <button class="submit">Enviar</button>
      <p class="signin">¿Ya tienes una cuenta? <a href="./login.php">Iniciar sesión</a> </p>
    </form>
  </main>

  <footer class="bg-white text-black text-center py-3">
    © 2025 FireStage - Todos los derechos reservados
  </footer>
  <script src="./public/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</html>