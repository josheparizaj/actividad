<?php
include '../config/conexion.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];

$sql = "UPDATE productos
SET nombre='$nombre',
descripcion='$descripcion',
cantidad='$cantidad',
precio='$precio'
WHERE id='$id'";

if ($conn->query($sql)) {
    header("Location: dashboard.php");
} else {
    echo "Error al actualizar";
}
?>
