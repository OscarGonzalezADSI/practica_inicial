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
		<video src="https://rr4---sn-4g5lznlz.googlevideo.com/videoplayback?expire=1659136806&ei=xhbkYpurFdSm0_wPwOSWqA8&ip=216.131.74.162&id=o-ALigfv86cS58Q5Ymrwb_f21cDHPoOTE7Jp9nW99lDd_7&itag=137&aitags=133%2C134%2C135%2C136%2C137%2C160%2C242%2C243%2C244%2C247%2C248%2C278&source=youtube&requiressl=yes&spc=lT-KhqhNuiTS_RH-_zJwE65lJ5zUgl8&vprv=1&mime=video%2Fmp4&ns=PezhVaIOuWL9XLBgSxU-Q7cH&gir=yes&clen=31278428&otfp=1&dur=80.847&lmt=1607133029650157&keepalive=yes&fexp=24001373,24007246&c=WEB&txp=6216222&n=F-wjLzTSpUBxZA&sparams=expire%2Cei%2Cip%2Cid%2Caitags%2Csource%2Crequiressl%2Cspc%2Cvprv%2Cmime%2Cns%2Cgir%2Cclen%2Cotfp%2Cdur%2Clmt&sig=AOq0QJ8wRAIgF4ACbU0-Tq4m36blpta45ahaKCfMucPSjLoJuxnCeUcCIE15580SdqRw8mYH5noyTUO0GTqES5K5v0kmaBNRShwM&redirect_counter=1&cm2rm=sn-5uae777s&req_id=d488bb5557da3ee&cms_redirect=yes&cmsv=e&mh=cC&mip=181.33.200.158&mm=34&mn=sn-4g5lznlz&ms=ltu&mt=1659115359&mv=u&mvi=4&pl=23&lsparams=mh,mip,mm,mn,ms,mv,mvi,pl&lsig=AG3C_xAwRQIhAPr46bJ2huUhwuifCOeeTzDug0oZAbb_DN3xvfuGSe3cAiAZrLdeayoTDaYVL2SZ0Bti5e2KISy5rCentbLDMbbTIA%3D%3D" autoplay="true" muted="true" loop="true" poster="https://carontestudio.com/img/contacto.jpg"></video>
		<h1>Sección primera - Con vídeo</h1>
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
		<video src="https://rr4---sn-4g5lznlz.googlevideo.com/videoplayback?expire=1659136806&ei=xhbkYpurFdSm0_wPwOSWqA8&ip=216.131.74.162&id=o-ALigfv86cS58Q5Ymrwb_f21cDHPoOTE7Jp9nW99lDd_7&itag=137&aitags=133%2C134%2C135%2C136%2C137%2C160%2C242%2C243%2C244%2C247%2C248%2C278&source=youtube&requiressl=yes&spc=lT-KhqhNuiTS_RH-_zJwE65lJ5zUgl8&vprv=1&mime=video%2Fmp4&ns=PezhVaIOuWL9XLBgSxU-Q7cH&gir=yes&clen=31278428&otfp=1&dur=80.847&lmt=1607133029650157&keepalive=yes&fexp=24001373,24007246&c=WEB&txp=6216222&n=F-wjLzTSpUBxZA&sparams=expire%2Cei%2Cip%2Cid%2Caitags%2Csource%2Crequiressl%2Cspc%2Cvprv%2Cmime%2Cns%2Cgir%2Cclen%2Cotfp%2Cdur%2Clmt&sig=AOq0QJ8wRAIgF4ACbU0-Tq4m36blpta45ahaKCfMucPSjLoJuxnCeUcCIE15580SdqRw8mYH5noyTUO0GTqES5K5v0kmaBNRShwM&redirect_counter=1&cm2rm=sn-5uae777s&req_id=d488bb5557da3ee&cms_redirect=yes&cmsv=e&mh=cC&mip=181.33.200.158&mm=34&mn=sn-4g5lznlz&ms=ltu&mt=1659115359&mv=u&mvi=4&pl=23&lsparams=mh,mip,mm,mn,ms,mv,mvi,pl&lsig=AG3C_xAwRQIhAPr46bJ2huUhwuifCOeeTzDug0oZAbb_DN3xvfuGSe3cAiAZrLdeayoTDaYVL2SZ0Bti5e2KISy5rCentbLDMbbTIA%3D%3D" autoplay="true" muted="true" loop="true" poster="https://carontestudio.com/img/contacto.jpg"></video>
	</section>
	</body>
	<script>
	    document.getElementById('registro').style.display='none';
	</script>
	</html>
<?php
}
