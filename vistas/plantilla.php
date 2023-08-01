<!doctype html>
<html >
<head>
    <meta charset="utf-8">
   
    <?php

   
    $url = Ruta::ctrRuta();

    ?>

	
   
    <link rel="icon" href="<?php echo $url; ?>vistas/assets/images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="<?php echo $url; ?>vistas/assets/css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="<?php echo $url; ?>vistas/assets/css/style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="<?php echo $url; ?>vistas/assets/css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="<?php echo $url; ?>vistas/assets/css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="<?php echo $url; ?>vistas/assets/css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="<?php echo $url; ?>vistas/assets/css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="<?php echo $url; ?>vistas/assets/css/custom.css" />
   
    
</head>

<body class="dashboard dashboard_1">
<div class="full_container">
         <div class="inner_container">
 
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

</div>
      </div>


    <script src="<?php echo $url; ?>vistas/assets/js/vendor/modernizr-3.5.0.min.js"></script>
    
</body>
</html>