<?php
// Iniciar la sesión
session_start();

// Verificar si el formulario de registro ha sido enviado
if (isset($_POST["registro"])) {
    // Obtener los datos del formulario
    $username = $_POST["username"];
    $correo = $_POST["correo"];
    $password = $_POST["password"];

    // Encriptar la contraseña usando bcrypt
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Incluir archivo de conexión a la base de datos
    include("conexion.php");

    // Preparar la consulta para evitar la inyección SQL
    $stmt = $conn->prepare("INSERT INTO loginm (usuario, contrasena, correo, rol) VALUES (?, ?, ?, 'usuario')");
    $stmt->bind_param("sss", $username, $hashed_password, $correo);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        // Redireccionar al usuario a la página de inicio de sesión después de un registro exitoso
        header("Location: index.php");
        exit;
    } else {
        // Mostrar mensaje de error si la ejecución de la consulta falla
        $_SESSION['error_registro'] = "Error al registrar el usuario: " . $stmt->error;
        error_log("Error en la consulta de registro: " . $stmt->error);
        header("Location: registro.php");
        exit;
    }

    // Cerrar la conexión a la base de datos
    $stmt->close();
    $conn->close();
}
?>
