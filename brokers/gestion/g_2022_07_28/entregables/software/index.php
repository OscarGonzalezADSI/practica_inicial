<?php

session_start();

if(isset($_SESSION["email"]) && isset($_SESSION["pass"]))
{
?>
	<!DOCTYPE html>
	<html>
	<head>
	<title>W3.CSS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="./css/styles.css">
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
	<br><br>
	<div class="w3-container">
	</div>
	</body>
	</html>
<?php
}else
{
?>
	<!DOCTYPE html>
	<html>
	<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./css/main.css" >
	<script src="./js/main.js"></script>
	</head>
	<body>
	<form id="login" action="./service/Login/start.php" method="post">
	  <fieldset class="user">
		<h2>Login:</h2>
	  </fieldset>
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
	  <fieldset class="submit">
		<input type="submit" id="submit" value="Registrarme">
	  </fieldset>
	</form>
	</body>
	</html>
<?php
}
