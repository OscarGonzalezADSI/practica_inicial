<?php
function arrendador_Template($arreglo)
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
<script src="./js/tables/TableArrendador/TableArrendador.js"></script>
<script src="./js/view/view.js"></script>
<script>const arrendadores = <?php echo json_encode($arreglo); ?>;</script>
<script src="./js/main/mainArrendador.js"></script>
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
  </div>
</div>
<br><br>
<div class="w3-container">
  <h1>Arrendadores</h1>
  <table id="arrendador"></table>
</div>
</body>
</html>
<?php
}
