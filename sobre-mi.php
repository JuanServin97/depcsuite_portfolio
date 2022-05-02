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

<body id="">
    <?php 
    $pg = "sobre-mi";
    include_once ("header.php") ?>

    <main class="">
        <section class="encabezado py-2 container">   
            <div>
                <h1>Sobre mi</h1>
                <p>Apasionado por la programación. Soy estudiante de cursos de programación Full Stack y de Base de datos.
                </p>
                <button class="btn btn-rojo">Enviar mensaje</button>
            </div>
            <div class="pt-3 mb-3 encabezado-img text-center">
                <img src="./images/nelson-daniel-tarche.jpg" class="encabezado-img">
            </div>
        </section>

        <section class="sm-stack py-5 container">
            <h2>Stack tecnológico</h2>
            <div class="row ">
               <div class="col-6 text-center">
                    <div class="px-4 py-5  mx-0 mb-4 card card">
                        <h3 class="text-center">
                            Javascript
                        </h3>
                        <img src="./images/javascript.jpg" class="img-fluid d-block mx-auto">
                    </div>
               </div>

               <div class="col-6 text-center">
                    <div class="px-4 py-5  mx-0 mb-4 card card">
                        <h3 class="text-center">
                            Javascript
                        </h3>
                        <img src="./images/javascript.jpg" class="img-fluid d-block mx-auto">
                    </div>
                </div>
               
                <div class="col-6 text-center">
                    <div class="px-4 py-5  mx-0 mb-4 card card">
                        <h3 class="text-center">
                            Javascript
                        </h3>
                        <img src="./images/javascript.jpg" class="img-fluid d-block mx-auto">
                    </div>
                </div>

                <div class="col-6 text-center">
                    <div class="px-4 py-5  mx-0 mb-4 card card">
                        <h3 class="text-center">
                            Javascript
                        </h3>
                        <img src="./images/javascript.jpg" class="img-fluid d-block mx-auto">
                    </div>
                </div>

                <div class="col-6 text-center">
                    <div class="px-4 py-5  mx-0 mb-4 card card">
                        <h3 class="text-center">
                            Javascript
                        </h3>
                        <img src="./images/javascript.jpg" class="img-fluid d-block mx-auto">
                    </div>
                </div>

                <div class="col-6 text-center">
                    <div class="px-4 py-5  mx-0 mb-4 card card">
                        <h3 class="text-center">
                            Javascript
                        </h3>
                        <img src="./images/javascript.jpg" class="img-fluid d-block mx-auto">
                    </div>
                </div>
           </div>
            </div>
        </section >
        <section class="">
            <div class="exp-border pt-3 container">
                <div class="exp pt-5 pb-4">
                    <h2 class="moradito"><i class="fa-solid fa-briefcase"></i> Experiencia laboral</h2>
                </div>
                <h3 class="grisaseo">Director-Founter</h3>
                <h4 class="moradito">DEPCSUITE SA</h4>
                <p>2016 - presente</p>
                <p>Lidero el desarrollo y posicionamiento de la empresa en sus tres líneas de negocio: cloud services, desarrollo de sistemas y educación IT en Buenos Aires, con sedes en Puerto Madero y Belgrano. Celebración de convenios estratégicos. Desarrollo de nuevos productos. Coordinación del área de sistemas y educación. Docente de cursos tecnológicos en: Laravel, PHP, HTML, CSS, Javascript, jQuery, AJAX, React.js, Bootstrap, GitLab, HTTP Apache2, SSL, MySQL, HAProxy, ProFTPd, virtualización con VMware ESXi, GNU/Linux Debian.
                </p>
            </div>
        </section>
    </main>

    <?php include_once ("footer.php");  ?>
</body>

</html>