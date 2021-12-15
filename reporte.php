<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <title>Reporte</title>

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
                            <li class="scroll-to-section"><a href="votar.php">Votar</a></li>
                            <li class="scroll-to-section"><a href="#frequently-question" class="active">Reporte</a></li>
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


    <!-- ***** Frequently Question Start ***** -->
    <section class="section" id="frequently-question">
        <div class="container">
            <div class="row">
                <section class="section_1 seccion">
<?php

/*$fp = fopen("datos.txt","r");*/
$fw = fopen("salida.txt", "r");
$parpri=0;
$parpan=0;
$parprd=0;
$parmorena=0;
echo "<table class='espacio'>";
echo "<tr>";
   echo "<th style='font-size: 25px;'>Nombre </th>";
   echo "<th style='font-size: 25px;'>Partido <th>";
echo "</tr>";
while(!feof($fw))
{
   $linea=fgets($fw);
   $separada = explode(" ",$linea); 
   /*var_dump(trim($separada));*/
   if (str_word_count($linea) == 0){
      break;
   }
   echo "<tr>";
   echo "<td>";
   echo "$separada[0]";
   echo "</td>";
   echo "<td>";
   echo "$separada[1]";
   echo "<td>";
   echo "</tr>";
   if (trim($separada[1]) == "PRI"){
      $parpri = $parpri + 1;
   } elseif (trim($separada[1]) == "PAN"){
      $parpan = $parpan + 1;
   } elseif (trim($separada[1]) == "PRD"){
      $parprd = $parprd + 1;
   } else {
      $parmorena = $parmorena + 1;
   }
}
echo "</table>";
fclose($fw);
?>
</section>

<section class="seccion" style="margin: 2% 20% 2% 20%;width:700px;">
   <div>
   <?php
      include "libchart/classes/libchart.php";
      $char = new HorizontalBarChart(600,270);
      $dataset = new XYDataSet();

      $dataset ->addPoint(new Point("PRI",$parpri));
      $dataset ->addPoint(new Point("PAN",$parpan));
      $dataset ->addPoint(new Point("PRD",$parprd));
      $dataset ->addPoint(new Point("MORENA",$parmorena));

      $char ->setDataSet($dataset);
      $char ->getPlot()->setGraphPadding(new Padding(5,30,20,240));
      $char ->setTitle("El número de votos por cada partido es:");
      $char ->render("generated/grafical.png");

   ?>
   </div>
   <img src="generated/grafical.png"/>
</section>

<main class="section_3 seccion" id="tamaño">
   <section>
      <table>
         <tr><h4>El partido ganador fue:</h4></tr>
         <tr>
            <img id="p0" src="Images/Pri.png" style="visibility: collapse;width: 0">
            <img id="p1" src="Images/Pan.png" style="visibility: collapse;width: 0;"> 
            <img id="p2" src="Images/Prd.png" style="visibility: collapse;width: 0;">
            <img id="p3" src="Images/Morena.png" style="visibility: collapse; width: 0;">
         </tr>
      </table>
   </section>
</main>

   <script>
      var pri = <?php echo $parpri; ?>;
      var pan = <?php echo $parpan; ?>;
      var prd = <?php echo $parprd; ?>;
      var morena = <?php echo $parmorena; ?>;
      var primer = [];
      var partidosp = ["PRI","PAN","PRD","MORENA"];
      var resultados = [pri,pan,prd,morena];
      var num_max = Math.max(pri,pan,prd,morena);
      //var ganador = resultados.indexOf(num_max);
      var i = 0;
      var j = 0;
      do{
         if (resultados[i] == num_max){primer[j] = partidosp[i];j++;}i++;
      } while(i < 4);
      for (i = 0; i < primer.length; i++){
         if(primer[i] == "PRI"){
            document.getElementById("p0").style.width = "100px";
            document.getElementById("p0").style.visibility = "initial";
         }
         if(primer[i] == "PAN"){
            document.getElementById("p1").style.width = "100px";
            document.getElementById('p1').style.visibility = "initial";
         }
         if(primer[i] == "PRD"){
            document.getElementById("p2").style.width = "100px";
            document.getElementById('p2').style.visibility = "initial";
         }
         if(primer[i] == "MORENA"){
            document.getElementById("p3").style.width = "100px";
            document.getElementById('p3').style.visibility = "initial";
         }
      }
   </script>
            </div>
        </div>
    </section>
    <!-- ***** Frequently Question End ***** -->
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