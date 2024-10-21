<?php
session_start();

include('conexion.php');

if (isset($_POST["usuario"]) && isset($_POST["contrasena"])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $usuario = validate($_POST['usuario']);
    $contrasena = validate($_POST['contrasena']);

    if (empty($usuario)) {
        header("Location: index1.php?error=El Usuario es requerido");
        exit();
    } elseif (empty($contrasena)) {
        header("Location: index.php?error=La clave es requerida");
        exit();
    } else {
        // Consulta preparada para buscar el usuario por nombre de usuario o correo electrónico
        $Sql = "SELECT * FROM loginm WHERE (usuario = ? OR correo = ?)";
        $stmt = $conn->prepare($Sql);
        $stmt->bind_param("ss", $usuario, $usuario);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            // Verificar la contraseña utilizando password_verify
            if (password_verify($contrasena, $row['contrasena'])) {
                // Usuario autenticado correctamente
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_rol'] = $row['rol'];

                if ($row['rol'] === 'admin') {
                    header("Location: dash.php");
                    exit();
                } else {
                    header("Location: index1.php");
                    exit();
                }
            } else {
                // Contraseña incorrecta
                header("Location: index.php?error=Usuario o contraseña incorrectos");
                exit();
            }
        } else {
            // Usuario no encontrado
            header("Location: index.php?error=Usuario o contraseña incorrectos");
            exit();
        }
    }
}
?>
