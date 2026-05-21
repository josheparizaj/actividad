<?php
include '../config/conexion.php';

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios(nombre, correo, password)
VALUES('$nombre','$correo','$password')";

if ($conn->query($sql)) {
    header("Location: login.php");
} else {
    echo "Error al registrar usuario";
}
?>