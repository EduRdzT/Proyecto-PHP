<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <title>Registros</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/templatemo-art-factory.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl-carousel.css">

    </head>
    
    <body>
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo"><img src="Images/Mexico.png" style="width: 200px;"/></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="index.html">Inicio</a></li>
                            <li class="scroll-to-section"><a href="#services" class="active">Registrar</a></li>
                            <li class="scroll-to-section"><a href="votar.php">Votar</a></li>
                            <li class="scroll-to-section"><a href="reporte.php">Reporte</a></li>
                            <li class="scroll-to-section"><a href="contacto.html">Contacto</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


    <!-- ***** Features Big Item Start ***** -->
 <section class="section" id="services">
    <div class="container">
        <div class="row">
    <section class="seccion">
        <form action="persona.php" method="post">
            <div class="form">
                <INPUT TYPE="text" NAME="nombre" required>
                <label class="estilo">
                    <span class="text-estilo">
                        <strong>Nombre</strong>
                    </span>
                </label>
            </div>

            <div class="form">
                <INPUT TYPE="number" NAME="ine" maxlength="9" required>
                <label class="estilo">
                    <span class="text-estilo">
                        <strong>No. INE</strong>
                    </span>
                </label>
            </div>

            <div class="form">
                <INPUT TYPE="tel" NAME="telefono" maxlength="10" required>
                <label class="estilo">
                    <span class="text-estilo">
                        <strong>Telefono</strong>
                    </span>
                </label>
            </div>

            <div class="form">
                <INPUT TYPE="email" NAME="correo" required>
                <label class="estilo">
                    <span class="text-estilo">
                        <strong>Correo Electrónico</strong>
                    </span>
                </label>
            </div>

            <div class="form">
                <INPUT TYPE="text" NAME="ciudad" required>
                <label class="estilo">
                    <span class="text-estilo">
                        <strong>Ciudad</strong>
                    </span>
                </label>
            </div>

            <div class="form">
                <INPUT TYPE="text" NAME="estado" required>
                <label class="estilo">
                    <span class="text-estilo">
                        <strong>Estado</strong>
                    </span>
                </label>
            </div>

            <br>
            <div class="boton">
                <INPUT TYPE="submit" NAME="enviar" VALUE="Registrar">
            </div>
        </form>
    </section>
</div>
</div>
    </section>
    <!-- ***** Features Big Item End ***** -->
    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
  </body>
</html>