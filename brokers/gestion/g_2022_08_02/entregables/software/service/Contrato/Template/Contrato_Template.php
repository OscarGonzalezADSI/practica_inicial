<?php
function contrato_Template($arreglo)
{
?>
	<!DOCTYPE html>
	<html>
	<head>
	<title>W3.CSS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="./css/styles.css">
	<script src="./js/lib/NewTable/NewTable.js"></script>
	<script src="./js/tables/TableContrato/TableContrato.js"></script>
	<script src="./js/view/view.js"></script>
	<script>const contratos = <?php echo json_encode($arreglo); ?>;</script>
	<script src="./js/main/mainContrato.js"></script>
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
		<a href="./consultaPersona.php?cedula=" class="w3-bar-item w3-button">consulta persona</a>
		<a href="./service/Login/out.php" class="w3-bar-item w3-button">cerrar sesion</a>
	  </div>
	</div>
	<br><br>
	<div class="w3-container">
	  <h1>Contratos</h1>
	  <table id="contrato"></table>
	</div>
	</body>
	</html>
<?php
}
