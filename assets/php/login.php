<?php
session_start();

$servidor = "localhost";
$usuario = "root";
$clave = "";
$basededatos = "boom_login";

$enlace = mysqli_connect($servidor, $usuario, $clave, $basededatos);
if (!$enlace) {
    die("Error de conexión a la base de datos: " . mysqli_connect_error());
}

if (isset($_POST['username'], $_POST['email'], $_POST['password'])) {
    function validate($data) {
        return htmlspecialchars(stripslashes(trim($data)));
    }

    $username = validate($_POST['username']);
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

    if (empty($username) || empty($email) || empty($password)) {
        header("Location: sing_up.php?error=Todos los campos son requeridos");
        exit();
    } else {
        $password = md5($password); // Considera usar password_hash
        $sql = "SELECT * FROM datos WHERE username = '$username' AND email = '$email' AND password = '$password'";
        $result = mysqli_query($enlace, $sql);

        if ($result && mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username'];
            $_SESSION['Id'] = $row['Id'];
            header("Location: ../index.php"); // Asegúrate de la ruta correcta
            exit();
        } else {
            header("Location: sing_up.php?error=Usuario o contraseña incorrectos");
            exit();
        }
    }
} else {
    echo "Datos no recibidos.";
    exit();
}
?>
