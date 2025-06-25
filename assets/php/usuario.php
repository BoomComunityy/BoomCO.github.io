
<!DOCTYPE html>
<html lang="en">

<head>

    <title>𝘽𝙊𝙊𝙈 Tienda - Página de Inicio de Sesión</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="../img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/templatemo.css">
    <link rel="stylesheet" href="../css/custom.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="../css/fontawesome.min.css">

    <link rel="stylesheet" href="../css/usuario.css">

</head>

<body>
    <nav class="navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:Boomcomunityy@gmail.com">Boomcomunityy@gmail.com</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:+57 3012866061">301-286-6061</a>
                </div>
                <div>
                    <a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.instagram.com/_boom_corp/?utm_source=ig_web_button_share_sheet" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Top Nav -->



    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
                𝘽𝙊𝙊𝙈
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">Acerca de</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shop.html">Tienda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contacto</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="sign_up.html">Registrarse </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Log_in.html">Iniciar Sesión</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="subir.html">Subir Productos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <a href="#"> <img src="./../img/img_perfil.jpg" class="img_perfil"></a>
  <h1>  <?php echo htmlspecialchars($username); ?></h1>
    <form action="assets/php/subir.php" method="POST" enctype="multipart/form-data" class="subir_img">
        <input type="file" name="image" accept="image/*" required>
        <button type="submit">Subir</button>
    </form>
</body>

</html>