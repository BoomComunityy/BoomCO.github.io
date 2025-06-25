<!DOCTYPE html>
<html lang="es">

<head>
   
    <?php include "/xampp/htdocs/Boom/assets/php/Enlaces/enlaces.php";?>

</head>

<body>
   
    <?php include "C:/xampp/htdocs/Boom/assets/php/Enlaces/Barra_inicio.php"; ?>

       


    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Buscar ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <section class="container py-5">
        <div class="row">
            <div class="col-md-6">
                <h2 class="h2 text-black">Contáctanos</h2>
                <p>Si tienes alguna pregunta o inquietud, por favor completa el formulario de contacto.</p>
                <form action="send_form_email.php" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Mensaje</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
            <div class="col-md-6">
                <div id="map-container" class="z-depth-1-half map-container" style="height: 500px">
                    <div id="mapid" style="height: 100%;"></div>
                </div>
            </div>
        </div>
    </section>

    <?php include "C:/xampp/htdocs/Boom/assets/php/Enlaces/footer.php"; ?>
   
</body>

</html>
