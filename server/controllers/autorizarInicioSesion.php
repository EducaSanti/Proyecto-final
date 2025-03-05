<?php
include("../../server/config/conexionBD.php");


function comprobar_datos($datos){
    // Elimina los espacios tanto al final como al principio y las comillas simples
    $datos = trim($datos);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);

    return $datos;
}

function revisar_email($email){
    $email = comprobar_datos($email);

    $conn = conexionBaseDatos();

    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->fetch();

    if(isset($email)){
        return true;
    }else{
        return false;
    }
}

function obtener_contrasena($email){
    $email = comprobar_datos($email);

    $conn = conexionBaseDatos();

    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email=?");
    $stmt->bind_param("s", $email);

    $result = $stmt->fetch();
    return $result['contraseña'];
}

function autorizacion($email,$password){
    $email = comprobar_datos($email);
    $password = comprobar_datos($password);

    if(revisar_email($email)){
        $contrasenaBD = obtener_contrasena($email);
        $resultAuth = password_verify($password, $contrasenaBD);

        return $resultAuth;
    }
}

if(isset($_POST['email']) &&  isset($_POST['contrasena'])){
    $autorizar_usuario = autorizacion($_POST['email'], $_POST['contrasena']);
    if($autorizar_usuario){
        header('Location: ../../index.php');
    } else {
        header('HTTP/1.0 401 Unauthorized');
    }
}

?>