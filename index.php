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
    <?php 
    $pg = "index";
    include_once ("header.php"); ?>

    <main class="container">
        <div>
            <div class="cohete text-center mt-5">
                <img src="./images/cohete.svg" alt="Cohete">
            </div>
            <div class="text-center mt-5">
                <h1 class="inicio_titulo d-inline py-1 px-4">Bienvenid@ a mi sitio web sobre web development</h1>
            </div>
            <div class="text-center mt-5 ">
                <a href="" class="inicio_p mb-2 px-2 py-2 d-inline">Conoce mis proyectos</a>
            </div>
        </div>
    </main>

    <?php include_once ("footer.php");  ?>
</body>

</html>