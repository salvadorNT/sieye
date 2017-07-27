<!doctype html>
<html class="no-js" lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SIEYE Sistemas de Iluminación y emergencia</title>
    <link rel="stylesheet" href="foundation-6.3.0-complete/css/foundation.min.css">
	<link rel="stylesheet" type="text/css" href="slick-1.6.0/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="slick-1.6.0/slick/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="css/encabezado.css"/>
  </head>
  <body>
	<script src="https://code.jquery.com/jquery-3.0.0.js"></script>
	<script src="https://code.jquery.com/jquery-migrate-3.0.0.js"></script>
	<script type="text/javascript" src="slick-1.6.0/slick/slick.min.js"></script>
	
	<!--Encabezado-->
	<div id="margenInicial">
	</div>
	
	<!--Termina encabezado-->
	
    <!-- Start Top Bar -->

	<header id="main-header">
		<div class="title-bar transparencia">

			<div class="title-bar-left">		
					
					<h5 class="text-center"><img  width="15%" height="8" src="Img/logo.png">SIEYE  Sistemas de Iluminación Emergencia Y Energía</h5>		
			</div>
			
		</div>
			
	</header>
	
	
    <!-- End Top Bar -->

				<div class="callout small secondary">
				<ul class="menu">
				  
				  <a href="index.html" class="button">Home</a>
				  <a href="productos.html" class="button">Productos</a>
				  <button type="button" class="success button">Contacto</button>
				</ul>
				</div>
			
			<div class="row small-up-2 medium-up-3 large-up-6">
				<div class="callout primary">
					<?php if (!isset($_POST['email'])) { ?>   
  
					<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
					<h3>Formulario de contacto</h3>   
					  <div class="row">
						<div class="medium-6 columns">
						  <label>Nombre y/o empresa
							<input name="nombre" id="nombre" onblur="MM_validateForm('nombre','','R');return document.MM_returnValue" type="text" placeholder="Nombre y/o empresa">
						  </label>
						</div>
					  </div>
					  
					  <div class="row">
						<div class="medium-6 columns">
						  <label>Teléfono:
							<input name="telefono" id="telefono" onblur="MM_validateForm('telefono','','RisNum');return document.MM_returnValue" type="text" placeholder="Teléfono">
						  </label>
						</div>
					  </div>

					  <div class="row">
						<div class="medium-6 columns">
						  <label>Email:
							<input name="email" id="email" onblur="MM_validateForm('email','','NisEmail');return document.MM_returnValue" type="text" placeholder="e-mail">
						  </label>
						</div>
					  </div>
					  
					  <div class="row">
						<div class="medium-6 columns">
						  <label>Mensaje:
							<textarea  name="mensaje" cols="50" rows="6" id="mensaje" onblur="MM_validateForm('mensaje','','R');return document.MM_returnValue" placeholder="Escribe aquí tu mensaje"></textarea>
						  </label>
						</div>
					  </div>
					  
					  <div class="row">
						<div class="medium-2 columns">
							<input type="reset" class="button" value="Borrar todo" />
						
						<div class="medium-2 columns">
							<input type="submit" class="button" value="enviar" />
						</div>
					  </div>
					</form>     
					<?php }else{   
					  
					$msg= "";   
					$msg= "Mensaje del formulario de contacto de SIEYE.netii.net";   
					$msg.= "\nNombre: ". $_POST['nombre'];   
					$msg.= "\nEmail: ".$_POST['email'];   
					$msg.= "\nTelefono: ". $_POST['telefono'];   
					$msg.= "\nMensaje: \n".$_POST['mensaje'];   
					$remitente = $_POST['email'];   
					$subject = "Mensaje enviado desde SIEYE.netii.net por: ".$_POST['nombre'];   
					mail('n_uts@hotmail.com,jmnunosieye@axtel.net,jmnunor@hotmail.com', $subject, $msg, "FROM: $remitente");   
					  ?>   
					<p class="Estilo3"><strong>Mensaje enviado.</strong><br />   
					Su mensaje se ha enviado correctamente, gracias por ponerse en contacto con nosotros</p>   
					<?php } ?>
				</div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m0!3m2!1ses!2smx!4v1492449684106!6m8!1m7!1sY3j5UaZBRKuTnolJAgrwFg!2m2!1d19.54132818244649!2d-99.23469015761485!3f90.71757943683109!4f-21.906666052790257!5f0.7820865974627469" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			
	<div class="callout large secondary">
		<div class="row">
			<div class="large-4 columns">
			  <p>Panuco Nº 5 Col. Ignacio López Rayón Atizapán de Zaragoza Edo. de México C.P 52986</p>
			</div>
			
			<div class="large-4 columns">
			  <p>Tels. 01 (55) 5362 3081/2291</p>
			  <p>Cel.044 55 3712 0089</p>
			</div>
			
			<div class="large-4 columns">
			  <p> e-mail: <a href="mailto:jmnr14.jmnr@gmail.com">jmnr14.jmnr@gmail.com</a>  / <a href="mailto:jmnunor@hotmail.com">jmnunor@hotmail.com</a></p>
			</div>
			
		</div>
    </div>



  </body>
</html>
