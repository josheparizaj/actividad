<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "localhost";
$usuario = "root";
$contrasena = "";
$bd = "inventario_db";

$conn = new mysqli($host, $usuario, $contrasena, $bd);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

echo "✅ Conexion exitosa";

?>