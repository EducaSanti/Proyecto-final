<?php
include("../../server/config/conexionBD.php");
// Establecer el encabezado para indicar que la respuesta es JSON
header('Content-Type: application/json');
session_start();

//SIIN FUNCIONALIDAD
function comprobarIntentos(){
    if(!isset($_SESSION["INTENTOS"])){
        $_SESSION["INTENTOS"] = 0;
    }else{
        $_SESSION["INTENTOS"] ++;
    }
}

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

    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    return $row['contraseña'] ?? null;
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

// Respuesta por defecto
$response = [
    'success' => false,
    'message' => 'Error desconocido',
    'intentos' => 0
];

if(isset($_POST['email']) &&  isset($_POST['contrasena'])){
    try {
        $email = $_POST['email'];
        $password = $_POST['contrasena'];
        comprobarIntentos();

        if ($_SESSION['INTENTOS'] >= 3) {
            $response = [
                'success' => false,
                'message' => 'Has alcanzado el máximo de intentos',
                'max_intentos' => true,
                'intentos' => $_SESSION['INTENTOS']
            ];

        } elseif (autorizacion($email, $password)) {
            $_SESSION['usuario_registrado'] = $email;
            $response = [
                'success' => true,
                'redirect' => '../../index.php',
                'message' => 'Inicio de sesión exitoso'
            ];
        } else {
            $response = [
                'success' => false,
                'message' => 'Credenciales incorrectas',
                'intentos' => $_SESSION['INTENTOS']
            ];
        }
    } catch (Exception $e) {
        $response = [
            'success' => false,
            'message' => 'Error del servidor: ' . $e->getMessage(),
            'intentos' => isset($_SESSION['INTENTOS']) ? $_SESSION['INTENTOS'] : 0
        ];
    }
}

// Devolver la respuesta como JSON
echo json_encode($response);
exit;

?>