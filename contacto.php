<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body id="contacto">
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
                        <li class="nav-item">
                            <a class="nav-link px-4 py-1" href="proyectos.php">Proyectos</a>
                        </li>
                        <li class="nav-item active">
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
        <div class="row">
            <div class="col-12 pt-3 pb-5"> <h1> Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6"> <p>Te invito a que te contactes enviándome un mensaje o bien por whatsapp.</p> 
            </div>
            <div class="col-12 col-sm-6">
                <form action="">
                    <div class="mb-3">
                        <input type="text" id="txtNombre" name="txtNombre" placeholder="Nombre" class="form-control">
                    </div>

                    <div class="mb-3">
                        <input type="text" id="txtCorreo" name="txtCorreo" placeholder="Correo" class="form-control">
                    </div>

                    <div class="mb-3">
                        <input type="number" id="number" name="numero" placeholder="Teléfono/Whatsapp" class="form-control">
                    </div>

                    <div class="mb-3">
                        <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe aquí tu mensaje" class="form-control shadow" required=""></textarea>
                    </div>

                    <div class="mb-3 px-1">
                        <button type="submit" id="btnEnviar" class="btn">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer class="container">
        <div class="row col mt-3 pb-3">
            <div class="col-lg-3 col-sm-12 text-center text-sm-center col-m-12"> 
                <a href="https://github.com/JuanServin97/depcsuite_portfolio" class="icon "><i class=" red-text fa-brands fa-github iconos red-text"></i></a> 
                <a href="#" class="icon"><i class="fa-brands fa-linkedin iconos m-3 mb-3"></i></a>
            </div>

            <div class="col-lg-3 col-sm-12 text-center col-m-12 mt-3 red-text">Sponsor 
                <a href="https://github.com/JuanServin97" class="underline">DePC Suite</a>
                
            </div>

            <div class="col-lg-3 col-sm-12 text-center col-m-12 mt-3">
                 <a href="mailto:juanjoservin2@hotmail.com" class="underline">Contáctame</a> 
            </div>
        </div>
    </footer>   
    <div class="whatsapp">
        <a href="https://api.whatsapp.com/send?phone=595986406166" title="Whatsapp"><i class="fab fa-whatsapp"></i></a>
    </div>
</body>

</html>