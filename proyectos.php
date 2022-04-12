<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body id="proyectos1">
    <header class="container">
        <nav class="navbar navbar-expand-md  mb-4">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link  px-4 py-1" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 py-1" href="sobre-mi.php">Sobre mí</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link px-4 py-1" href="proyectos.php">Proyectos</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link px-4 py-1" href="contacto.php">Contacto</a>
                        </li>
                    </ul>   
                    <div class="d-inline">
                        <a class="btn btn-rojo btn-outline-success" type="submit">Descargar mi CV<i class="fa-solid fa-download"></i></a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="container">
        <div class="col-12 pt-3 mt-3">
            <h1>Proyectos</h1>
        </div>
        <div class="row pt-5">
            <div class="col-12">
                <p>Los siguientes son algunos de los trabajos que he realizado:</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-4 p-3">
                <div class="proyecto">
                    <img src="./images/abmclientes.png" class="img-fluid">
                    <h2 class="p-3 d-block">ABM Clientes</h2>
                    <p class="p-3 pb-5 d-block">Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP, Bootstrap y Json.
                    </p>
                    <div class="row my-5">
                        <div class="col-6 ps-4">
                            <a href="#" class="btn btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6 text-center">
                            <a href="#">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-4 p-3">
                <div class="proyecto">
                    <img src="./images/abmventas.png" class="img-fluid">
                    <h2 class="p-3 d-block">ABM Clientes</h2>
                    <p class="p-3 pb-5 d-block">Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.
                    </p>
                    <div class="row my-5">
                        <div class="col-6 ps-4">
                            <a href="#" class="btn btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6 text-center">
                            <a href="#">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 p-3">
                <div class="proyecto">
                    <img src="./images/proyecto-integrador.png" class="img-fluid">
                    <h2 class="p-3 d-block">ABM Clientes</h2>
                    <p class="p-3 pb-5 d-block">Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS, Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y funcionalidades a fines.
                    </p>
                    <div class="row my-5">
                        <div class="col-6 ps-4">
                            <a href="#" class="btn btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6 text-center">
                            <a href="#" target="blank">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
    </main>
       <footer class="container">
        <div class="row col mt-3 pb-3">
            <div class="col-lg-3 col-sm-12 text-center text-sm-center col-m-12"> 
                <a href="https://github.com/JuanServin97/depcsuite_portfolio" class="icon"><i class="fa-brands fa-github iconos red-text"></i></a> 
                <a href="#" class="icon red-text"><i class="fa-brands fa-linkedin iconos m-3 mb-3 red-text"></i></a>
            </div>

            <div class="col-lg-3 col-sm-12 text-center col-m-12 mt-3 red-text">Sponsor 
                <a href="https://github.com/JuanServin97" class="underline text-center">DePC Suite</a>
                
            </div>

            <div class="col-lg-3 col-sm-12 text-center col-m-12 mt-3">
                 <a href="mailto:juanjoservin2@hotmail.com" class="underline red-text">Contáctame</a> 
            </div>
        </div>
    </footer>   
    <div class="whatsapp">
        <a href="https://api.whatsapp.com/send?phone=595986406166" title="Whatsapp"><i class="fab fa-whatsapp"></i></a>
    </div>
</body>

</html>