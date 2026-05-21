<?php
session_start();
include '../config/conexion.php';

if (!isset($_SESSION['usuario'])) {
    header("Location: ../auth/login.php");
    exit();
}

$sql = "SELECT * FROM productos";
$resultado = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inventario</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>

<div class="container">
    <div class="card">
        <h1>Sistema de Inventario</h1>
        <p>Bienvenido: <?php echo htmlspecialchars($_SESSION['usuario']); ?></p>

        <a href="../auth/logout.php"><button>Cerrar Sesión</button></a>
        <a href="reporte.php"><button>Generar PDF</button></a>
        <hr>

        <h2>Registrar Producto</h2>
        <form action="guardar_producto.php" method="POST">
            <input type="text" name="nombre" placeholder="Nombre Producto" required>
            <textarea name="descripcion" placeholder="Descripción"></textarea>
            <input type="number" name="cantidad" placeholder="Cantidad" required>
            <input type="number" step="0.01" name="precio" placeholder="Precio" required>
            <button type="submit">Guardar</button>
        </form>

        <h2>Lista de Productos</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while($fila = $resultado->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $fila['id']; ?></td>
                    <td><?php echo htmlspecialchars($fila['nombre']); ?></td>
                    <td><?php echo htmlspecialchars($fila['descripcion']); ?></td>
                    <td><?php echo $fila['cantidad']; ?></td>
                    <td><?php echo $fila['precio']; ?></td>
                    <td class="acciones">
                        <a href="editar.php?id=<?php echo $fila['id']; ?>">Editar</a>
                        <a href="eliminar.php?id=<?php echo $fila['id']; ?>">Eliminar</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
