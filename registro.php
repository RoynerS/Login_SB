<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/fav-icon.png" />
    <title>Registro</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="login-container">
        <h2>Registro</h2>
        <form action="registrar.php" method="POST">
            <input type="text" name="username" placeholder="Usuario" required>
            <input type="text" name="correo" placeholder="Correo" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit" name="registro">Registrar</button>
        </form>
        <p>¿Ya tienes una cuenta? <a href="index.php">Inicia Sesión</a></p>
        <?php
        // Mostrar mensajes de error si existen
        if (isset($_SESSION['error_registro'])) {
            echo '<p style="color:red;">' . $_SESSION['error_registro'] . '</p>';
            unset($_SESSION['error_registro']);
        }
        ?>
    </div>
</body>
</html>
