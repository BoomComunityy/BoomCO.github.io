<?php

$enlace = mysqli_connect("localhost", "root", "", "boom_login");

if (!$enlace) {
    die("Error de conexión: " . mysqli_connect_error());
}

if (isset($_POST['Registrarse'])) {

    // Validar y limpiar entradas
    $username = trim($_POST['username']);
    $correo = trim($_POST['correo']);
    $contraseña = $_POST['contraseña'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];

    // Validar email
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        die("Correo inválido");
    }

    // Hashear contraseña
    $passwordHash = password_hash($contraseña, PASSWORD_BCRYPT);

    // Preparar consulta segura
    $stmt = mysqli_prepare($enlace, "INSERT INTO datos (username, correo, contraseña, fecha_nacimiento) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "ssss", $username, $correo, $passwordHash, $fecha_nacimiento);

    if (mysqli_stmt_execute($stmt)) {
        header("Location:/ BOOM /index.php");
        exit();
    } else {
        echo "Error al insertar datos: " . mysqli_error($enlace);
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($enlace);
?>
