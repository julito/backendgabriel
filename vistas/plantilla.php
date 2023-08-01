<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
   
    <?php

   
    $url = Ruta::ctrRuta();

    ?>

	
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $url; ?>vistas/assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/assets/css/bootstrap.min.css">
   
    
   
    
</head>

<body>
  <input type="hidden" value="<?php echo $url;
  session_start();
  $_SESSION['ruta']=$url;
  ?>" name="ruta_url" id="ruta_url">




<?php

/*=============================================
CABEZOTE
=============================================*/

include "modulos/cabezote.php";

/*=============================================
CONTENIDO DINÁMICO
=============================================*/

$rutas = array();
$ruta = null;

if(isset($_GET["ruta"])){

	$rutas = explode("/", $_GET["ruta"]);

	$item = "ruta";
	$valor =  $rutas[0];

	/*=============================================
	URL'S AMIGABLES DE CATEGORÍAS
	=============================================*/

	

   

    if($rutas[0] == 'cart'){

        $ruta = 'cart';

    }


	/*=============================================
	LISTA BLANCA DE URL'S AMIGABLES
	=============================================*/



      if($ruta=='info-producto')
          include "modulos/info-producto.php";
      else if($ruta=='cart')
          include "modulos/cart.php";
         else if($ruta == null){
            include "modulos/error404.php";
            echo 'ruta:'.$rutas[0];
    
      }
	

}else{

	
    include "modulos/home.php";
}





include "modulos/footer.php";

?>




    <script src="<?php echo $url; ?>vistas/assets/js/vendor/modernizr-3.5.0.min.js"></script>
    
</body>
</html>