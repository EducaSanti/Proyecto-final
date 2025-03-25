<?php
session_start();

echo $_SESSION['usuario_registrado'];

session_unset();
session_destroy();

header('Location: ../../index.php');

?>