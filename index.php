

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="img/png" href="img/fav-icon.png" />
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <form action="login.php" method="POST">
    <div class="login-container">
        <h2>Iniciar Sesión</h2>

            <input type="text" name="usuario" placeholder="Usuario o Correo" required>
            <input type="password" name="contrasena" placeholder="Contraseña" required>
            <button type="submit">Iniciar sesión</button>

        <?php
        if(isset($error)) {
            echo '<p style="color:red;">' . $error . '</p>';
        }
        ?>
        
        <p>¿No tienes una cuenta? <a href="registro.php">Regístrate</a></p>
    </div>
    </form>
</body>
</html>
