<?php
function consultaPersonaDetalle($data)
{
	$persons = json_encode($data["persons"]);
	$propiedades = json_encode($data["propiedades"]);
	$contratosArrendador = json_encode($data["contratosArrendador"]);
	$contratosArrendatario = json_encode($data["contratosArrendatario"]);
	$pagos = json_encode($data["historicoPagos"]);
?>
	<!DOCTYPE html>
	<html>
	<head>
	<title>Mi perfil</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="./css/styles.css">
	<script src="./js/lib/NewTable/NewTable.js"></script>
	<script src="./js/tables/TablePerson/TablePerson.js"></script>
	<script src="./js/tables/TablePropiedad/TablePropiedad.js"></script>
	<script src="./js/tables/TableContrato/TableContrato.js"></script>
	<script src="./js/tables/TablePago/TablePago.js"></script>
	<script src="./js/view/view.js"></script>
	<script>const persons = <?php echo $persons; ?>;</script>
	<script>const propiedades = <?php echo $propiedades; ?>;</script>
	<script>const contratosArrendador = <?php echo $contratosArrendador; ?>;</script>
	<script>const contratosArrendatario = <?php echo $contratosArrendatario; ?>;</script>
	<script>const pagos = <?php echo $pagos; ?>;</script>
	<script src="./js/main/mainPerson.js"></script>
	<script src="./js/main/mainPropiedad.js"></script>
	<script src="./js/main/mainContratosArrendador.js"></script>
	<script src="./js/main/mainContratosArrendatario.js"></script>
	<script src="./js/main/mainPago.js"></script>
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
	  <h1>Chequeo del perfil del cliente: <?php echo $_GET["cedula"];?></h1>
	  <form style="float:right; margin-bottom:15px;">
	  <p style="width:300px">
	  Buscador por cédula:
	  </p>
	      <fieldset style="border-radius:5px; border:2px #999999 solid;">
		      <label for="cedula">Cédula:</label>
	          <input name="cedula" type="text"/>
	          <input type="submit" value="buscar">
	      </fieldset>
	  </form>
	  <table id="person"></table>
	  <table id="propiedad"></table>
	  <table id="contratosArrendador"></table>
	  <table id="contratosArrendatario"></table>
	  <table id="pago"></table>
	</div>
	</body>
	</html>
<?php
}
