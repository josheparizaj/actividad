<?php
include '../config/conexion.php';

$id = $_GET['id'];

$sql = "DELETE FROM productos WHERE id='$id'";

if ($conn->query($sql)) {
    header("Location: dashboard.php");
} else {
    echo "Error al eliminar";
}
?>
