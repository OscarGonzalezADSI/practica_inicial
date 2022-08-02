<?php

function toHome($persona)
{
?>
	<!DOCTYPE html>
	<html>
	<head>
	<title>administrativo</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="./css/styles.css">
	<link rel="stylesheet" href="./css/administrativo.css">
	</head>
	<body>
	<div class="w3-top">
	  <div class="w3-bar w3-lime">
		<a href="./persona.php?accion=ver" class="w3-bar-item w3-button">personas</a>
		<a href="./arrendatario.php?accion=ver" class="w3-bar-item w3-button">arrendatarios</a>
		<a href="./arrendador.php?accion=ver" class="w3-bar-item w3-button">arrendadores</a>
		<a href="./pago.php?accion=ver" class="w3-bar-item w3-button">pagos</a>
		<a href="./propiedad.php?accion=ver" class="w3-bar-item w3-button">propiedades</a>
		<a href="./contrato.php?accion=ver" class="w3-bar-item w3-button">contratos</a>
		<a href="./service/Login/out.php" class="w3-bar-item w3-button">cerrar sesion</a>
	  </div>
	</div>
	<div class="w3-container">
	</div>
	<body>
	<section id="sect1" class="sect">
		<video autoplay muted loop poster="https://carontestudio.com/img/contacto.jpg">
		<source src="./video/video_bienvenida.mp4" type="video/mp4">
		<source src="./video/video_bienvenida.mp4" type="video/mp4">
		Your browser does not support the video tag.
		</video>
		<br><br>
		<?php
			echo $persona["id_persona"];
			echo $persona["nombres"];
			echo $persona["apellidos"];
			echo $persona["correo"];
			echo $persona["cedula"];
			echo $persona["celular"];
			echo $persona["direccion"];
			echo $persona["rolArrendador"];
			echo $persona["rolArrendatario"];
			echo $persona["aceptaPoliticas"];
			echo $persona["fecha_registro"];
		?>
	</section>
	
	</body>
	</html>
<?php
}
