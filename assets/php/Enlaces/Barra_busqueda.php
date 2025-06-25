<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="buscar">
            <div class="variables">
                <div class="variable">
                    Filtrar <i class="fa fa-fw fa-chevron-down"></i>
                </div>
                <div class="variable">
                    Categorías <i class="fa fa-fw fa-chevron-down"></i>
                </div>
            </div>
            <input type="text" placeholder="Buscar" required />
            <div class="btn">
                <i class="fas fa-search icon"></i>
            </div>
            <div class="nav-icons">
                <a class="nav-icon position-relative text-decoration-none" href="../php/carrodecompras.php">
                    <i class="fa fa-fw fa-cart-arrow-down text-dark"></i>
                    <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">0</span>
                </a>
                <a class="nav-icon position-relative text-decoration-none" href="assets/php/usuario.php">
                    <i class="fa fa-fw fa-user text-dark"></i>
                </a>
            </div>
        </div>
        
    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>