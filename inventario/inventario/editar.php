<?php
include '../config/conexion.php';

$id = $_GET['id'];

$sql = "SELECT * FROM productos WHERE id='$id'";
$resultado = $conn->query($sql);
$fila = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Producto</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>

<div class="container">
    <div class="card">

        <h2>Editar Producto</h2>

        <form action="actualizar.php" method="POST">

            <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">

            <input type="text" name="nombre" value="<?php echo $fila['nombre']; ?>">

            <textarea name="descripcion"><?php echo $fila['descripcion']; ?></textarea>

            <input type="number" name="cantidad" value="<?php echo $fila['cantidad']; ?>">

            <input type="number" step="0.01" name="precio" value="<?php echo $fila['precio']; ?>">

            <button type="submit">Actualizar</button>

        </form>

    </div>
</div>

</body>
</html>
