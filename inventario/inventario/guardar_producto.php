<?php
include '../config/conexion.php';

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];

$sql = "INSERT INTO productos(nombre, descripcion, cantidad, precio)
VALUES('$nombre','$descripcion','$cantidad','$precio')";

if ($conn->query($sql)) {
    header("Location: dashboard.php");
} else {
    echo "Error al guardar";
}
?>
