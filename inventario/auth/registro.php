<html>
<head>
    <title>Registro</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>

<div class="container">
    <div class="card">

        <h2>Registro de Usuario</h2>

        <form action="guardar_usuario.php" method="POST">
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="email" name="correo" placeholder="Correo" required>
            <input type="password" name="password" placeholder="Contraseña" required>

            <button type="submit">Registrarse</button>
        </form>

    </div>
</div>

</body>
</html>