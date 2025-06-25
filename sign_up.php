<!DOCTYPE html>
<html lang="es">
<head>
   
    <?php include "/xampp/htdocs/Boom/assets/php/Enlaces/enlaces.php";?>


</head>
<body>

    <?php include "C:/xampp/htdocs/Boom/assets/php/Enlaces/Barra_inicio.php"; ?>


    <!-- Formulario de Registro -->
    <div class="login-container">
        <div class="login-form">
            <img src="assets/img/Sign_up_img(2).png" alt="Imagen del formulario" class="img-fluid" />
            <div class="form-container">
                <h2>Registrarse</h2>
                <form action="http://localhost/Boom/assets/php/sing_upback.php" name="boom_login" method="POST">
                  
                    <label for="username">Nombre de Usuario</label>
                    <input type="text" id="username" name="username" required placeholder="Ingrese su nombre de usuario">

                    <label for="email">Correo Electrónico</label>
                    <input type="email" id="email" name="correo" required placeholder="Ingrese su correo electrónico">
    
                    <div class="password-field">
                        <label for="password">Contraseña</label>
                        <input type="password" id="password" name="contraseña" placeholder="Ingrese su contraseña" required>
                        <i class="fa fa-eye password-toggle" onclick="togglePasswordVisibility('password')"></i>
                    </div>
    
                    <div class="password-field">
                        <label for="confirm_password">Confirmar contraseña</label>
                        <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirme su contraseña" required>
                        <i class="fa fa-eye password-toggle" onclick="togglePasswordVisibility('confirm_password')"></i>
                    </div>
    
                    <label for="birthdate">Fecha de Nacimiento</label>
                    <input type="date" id="birthdate" name="fecha_nacimiento" required>
    
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="terminos" required>
                        <label class="form-check-label">Acepto los términos y condiciones</label>
                    </div>
    
                    <button type="submit" name="Registrarse">Registrarse</button>
                </form>
            </div>
        </div>
    </div>
    
                <p>¿Ya estás registrado? <a href="log_in.php">Inicia sesión aquí</a>.</p>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script>
function togglePasswordVisibility(id) {
    const input = document.getElementById(id);
    input.type = input.type === "password" ? "text" : "password";
}


    </script>
    
</body>
</html>
