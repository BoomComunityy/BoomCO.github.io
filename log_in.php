<!DOCTYPE html>
<html lang="es">
<head>

    <?php include "/xampp/htdocs/Boom/assets/php/Enlaces/enlaces.php";?>

</head>
<body>

    <?php include "C:/xampp/htdocs/Boom/assets/php/Enlaces/Barra_inicio.php"; ?>

    <!-- Formulario de Inicio de Sesión -->
    <div class="login-container">
        <div class="login-form">
            <img src="assets/img/log_in_img.png" alt="Imagen del formulario">
            <div class="form-container">
                <h2>Iniciar sesión</h2>
            
                <form action="assets/php/login.php" method="post">
                    <label for="username">Nombre de usuario</label>
                    <input type="text" id="username" name="username" placeholder="Ingrese su nombre de usuario">

                    <label for="email">Correo electrónico</label>
                    <input type="email" id="email" name="email" placeholder="Ingrese su correo electrónico">

                    <div class="password-field">
                        <label for="password">Contraseña</label>
                        <input type="password" id="password" placeholder="Ingrese su contraseña">
                        <i class="fa fa-eye password-toggle" onclick="mostrarContrasena()"></i>
                    </div>

                    <button type="submit">Iniciar sesión</button>
                    <p>¿No estás registrado? <a href="sign_up.html">Regístrate aquí</a>.</p>
                </form>
            </div>
        </div>
    </div>

    <script src="assets/js/signup.js"></script>
</body>
</html>
