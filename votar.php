<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <title>Votaciones</title>

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
                            <li class="scroll-to-section"><a href="registro.php">Registrar</a></li>
                            <li class="scroll-to-section"><a href="#services" class="active">Votar</a></li>
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


    <!-- ***** Features Small Start ***** -->
    <section class="section" id="services">
        <section class="seccion">
            <form action="recive.php" method="post">
                <div>
                    <strong>Nombre</strong>
                    <center>
                    <?PHP
                        $link = mysqli_connect("localhost","root","");
                        mysqli_select_db($link,"registros");
                        $nom= mysqli_query($link,"select id_persona, nombre from personas");
                        echo '<select class="select-css" name="dato">';
                        echo "<option> Selecciona un nombre --- </option>";
                        while ($rem=mysqli_fetch_array($nom)){
                            echo "<option>".$rem['id_persona']." - ".$rem['nombre']."</option>";
                        }
                        echo "</select>";
                        mysqli_free_result($nom);
                        mysqli_close($link);
                    ?>
                    </center>
                </div>
                <br>
                <strong>Selecciona un partido político: </strong> 
                <center>
                    <table class="formu">
                        <tr>  
                            <td class="cc-selector">
                                <INPUT id="PRI" TYPE="radio" NAME="partido" VALUE="PRI" required>
                                <br><label FOR="PRI" class="drinkcard-cc PRI"></label>
                            </td>
                            <td class="cc-selector">
                                <INPUT id="PAN" TYPE="radio" NAME="partido" VALUE="PAN" required>
                                <br><label for="PAN" class="drinkcard-cc PAN"></label>
                            </td>
                        </tr>
                        <tr>
                            <td class="cc-selector">
                                <INPUT id="PRD" TYPE="radio" NAME="partido" VALUE="PRD" required>
                                <br><label for="PRD" class="drinkcard-cc PRD"></label>
                            </td>
                            <td class="cc-selector">
                                <INPUT id="MORENA" TYPE="radio" NAME="partido" VALUE="MORENA" required>
                                <br><label for="MORENA" class="drinkcard-cc MORENA"></label>
                            </td>
                        </tr>
                    </table>
                </center>
                <div class="boton">
                    <INPUT TYPE="submit" NAME="enviar" VALUE=" Enviar datos">
                </div>
            </form>
        </section>
    </section>
    <!-- ***** Features Small End ***** -->
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