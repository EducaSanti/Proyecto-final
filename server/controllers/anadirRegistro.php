<?php
include("../../server/config/conexionBD.php");


function comprobar_datos($datos){
    // Elimina los espacios tanto al final como al principio y las comillas simples
    $datos = trim($datos);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);

    return $datos;
}

function hash_contrasena($contrasena){
    return password_hash($contrasena, PASSWORD_DEFAULT);
}

function crear_usuarios($nombre, $apellidos, $email, $contrasena){
    $nombre = comprobar_datos($nombre);
    $apellidos = comprobar_datos($apellidos);
    $email = comprobar_datos($email);
    $contrasena = comprobar_datos($contrasena);
    $contrasena = hash_contrasena($contrasena);

    $conn = conexionBaseDatos();

    $stmt = $conn->prepare("INSERT INTO usuarios (nombre,apellidos,email,contraseña) VALUES (?, ? ,?, ?);");
    $stmt->bind_param("ssss", $nombre, $apellidos, $email, $contrasena);

    if($stmt->execute()){
        header('Location: ../../index.php');
    }
}

if(isset($_POST['nombre']) && isset($_POST['apellidos']) && isset($_POST['email']) &&  isset($_POST['contrasena'])){
    crear_usuarios($_POST['nombre'], $_POST['apellidos'], $_POST['email'], $_POST['contrasena']);
}

?>