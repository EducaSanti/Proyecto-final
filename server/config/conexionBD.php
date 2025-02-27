<?php


function conexionBaseDatos()
{
    $servername = "localhost";
    $username = "programador";
    $password = "prog";
    $dbname = "firestage";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexión Fallida: " . $conn->connect_error);
    }else{
        echo "Conexión exitosa";
    }

    return $conn;
}

?>