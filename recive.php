<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <title>Validación</title>

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
                            <li class="scroll-to-section"><a href="votar.php" class="active">Votar</a></li>
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
        <center>
            
      <?PHP
            $link = mysqli_connect("localhost","root","");
            mysqli_select_db($link,"registros");
            $fp=fopen("salida.txt","a");

            $nom = $_REQUEST['dato'];
            $par = $_REQUEST['partido'];
            //$par = trim($par);
            
            $partes = explode(" ",$nom);

            $res = mysqli_query($link,"select * from votos where id_persona='$partes[0]'");
            $rem=mysqli_fetch_array($res);
            if($rem['id_persona']==$partes[0]){
            	echo "<h5>El usuario ya voto</h5>";
            }
            else{
                echo "<h5>VOTO REGISTRADO</h5>";
                echo "Nombre: $partes[2] <br>";
                echo "Partido: $par <br>";
                $resultados = mysqli_query($link, "insert into votos (id_persona, partido) values('$partes[0]','$par')");
                fwrite($fp,"$partes[2] $par".PHP_EOL);
            }

            
            fclose($fp);
            mysqli_close($link);
      ?>
    </center>
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