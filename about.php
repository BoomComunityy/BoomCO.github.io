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
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
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



    <section style="background-color: #695dac; padding: 3rem 0;">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-md-8 text-white">
                    <h1>Acerca de Nosotros</h1>
                    <p>
                        Nosotros somos una compañia de servicio para el pueeblo y del pueblo
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="./assets/img/about-hero.svg" alt="Hero Acerca de">
                </div>
            </div>
        </div>
    </section>
    <!-- Fin Banner -->

    <!-- Inicio Sección -->
    <section class="container py-5">
        <div class="row text-center pt-5 pb-3">
            <div class="col-lg-6 m-auto">
                <h1 class="titulodelmes">Nuestros Servicios</h1>
                <p>
                    Ofrecemos un servicio de compra y venta negocios pequeños
                                    </p>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa fa-truck fa-lg"></i></div>
                    <h2 class="h5 mt-4 text-center">Servicios de Entrega</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fas fa-exchange-alt"></i></div>
                    <h2 class="h5 mt-4 text-center">Envíos y Devoluciones</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa fa-cogs fa-lg"></i></div>
                    <h2 class="h5 mt-4 text-center">Soporte Técnico</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa fa-phone fa-lg"></i></div>
                    <h2 class="h5 mt-4 text-center">Servicio al Cliente</h2>
                </div>
            </div>

        </div>
    </section>
    <!-- Fin Sección -->
   
    <?php include "C:/xampp/htdocs/Boom/assets/php/Enlaces/footer.php"; ?>

</body>

</html>
