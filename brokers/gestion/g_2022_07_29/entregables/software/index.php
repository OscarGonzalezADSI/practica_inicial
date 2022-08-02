<?php

session_start();

if(isset($_SESSION["email"]) && isset($_SESSION["pass"]))
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
	</section>

	</body>
	</html>
<?php
}else
{
?>
	<!DOCTYPE html>
	<html>
	<head>
	<title>general</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./css/main.css" >
	<link rel="stylesheet" href="./css/general.css" >
	<script src="./js/main.js"></script>
	</head>
	<body>
	<form id="login" action="./service/Login/start.php" method="post">
	  <fieldset class="user">
		<h2>Iniciar sesión:</h2>
	  </fieldset>
	  <div style="text-align:center;">
	     <a href="#registro" style="margin:15px;" onclick="document.getElementById('login').style.display='none'; document.getElementById('registro').style.display='block';" >Quiero registrarme.</a>
	  </div>
	  <fieldset class="submit">
		<input type="submit" id="submit2" value="Entrar">
	  </fieldset>
	</form>
	<form id="registro" action="persona.php?accion=registrar" method="post">
	  <fieldset class="user">
		<h2>Registro de usuario:</h2>
	  </fieldset>
	  <fieldset class="checkbox">
		<legend>Deseo ser...</legend>
		<fieldset>
		  <label for="rolArrendador">Arrendador.
			<input id="rolArrendador" name="rolArrendador" type="checkbox" checked="checked">
			<span class="geekmark"></span>
		  </label>
		</fieldset>
		<fieldset>
		  <label for="rolArrendatario">Arrendatario.
			<input id="rolArrendatario" name="rolArrendatario" type="checkbox" checked="checked">
			<span class="geekmark"></span>
		  </label>
		</fieldset>
		<p>Usted podrá arrendar y/o dejar en arriendo.</p>
	  </fieldset>
	  <fieldset class="checkbox">
		<legend>Políticas:</legend>
		<fieldset>
		  <label for="aceptaPoliticas">Acepto los términos y condiciones.
			<input id="aceptaPoliticas" name="aceptaPoliticas"  type="checkbox">
			<span class="geekmark"></span>
		  </label>
		</fieldset>
	  </fieldset>
	  <div style="text-align:center;">
	      <a href="#registro" style="margin:15px;" onclick="document.getElementById('login').style.display='block'; document.getElementById('registro').style.display='none';" >Volver al login.</a>
	  </div>
	  <fieldset class="submit">
		<input type="submit" id="submit" value="Registrarme">
	  </fieldset>
	</form>
	<section id="sect1" class="sect">
		<video autoplay muted loop poster="https://carontestudio.com/img/contacto.jpg">
			<source src="./video/video_bienvenida.mp4" type="video/mp4">
			<source src="./video/video_bienvenida.mp4" type="video/mp4">
			Your browser does not support the video tag.
		</video>
	</section>
	</body>
	<script>
	    document.getElementById('registro').style.display='none';
	</script>
	</html>
<?php
}
