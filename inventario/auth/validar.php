<?php
session_start();
include '../config/conexion.php';

$correo = $_POST['correo'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE correo='$correo'";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {

    $usuario = $resultado->fetch_assoc();

    if (password_verify($password, $usuario['password'])) {

        $_SESSION['usuario'] = $usuario['nombre'];

        header("Location: ../inventario/dashboard.php");

    } else {
        echo "Contraseña incorrecta";
    }

} else {
    echo "Usuario no encontrado";
}
?>