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
    <?php include_once ("header.php"); ?>


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
    <?php include_once ("footer.php");  ?>
</body>

</html>