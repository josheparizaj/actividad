<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>

<div class="container">
    <div class="card">
        <h2>Iniciar Sesión</h2>

        <form action="validar.php" method="POST">
            <input type="email" name="correo" placeholder="Correo" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit">Ingresar</button>
        </form>

        <p>
            ¿No tienes cuenta?
            <a href="registro.php">Registrarse</a>
        </p>
    </div>
</div>

</body>
</html>