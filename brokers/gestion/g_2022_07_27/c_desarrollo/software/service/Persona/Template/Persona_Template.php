<?php
function viewPersons($arreglo)
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
<script src="./js/tables/TablePerson/TablePerson.js"></script>
<script src="./js/view/view.js"></script>
<script>const persons = <?php echo json_encode($arreglo); ?>;</script>
<script src="./js/main/mainPerson.js"></script>
</head>
<body>

<div class="w3-top">
  <div class="w3-bar w3-lime">
    <a href="http://localhost/web/practica_inicial-master/brokers/gestion/g_2022_07_26/c_desarrollo/software/persona.php?accion=ver" class="w3-bar-item w3-button">personas</a>
    <a href="http://localhost/web/practica_inicial-master/brokers/gestion/g_2022_07_26/c_desarrollo/software/arrendatario.php?accion=ver" class="w3-bar-item w3-button">arrendatarios</a>
    <a href="http://localhost/web/practica_inicial-master/brokers/gestion/g_2022_07_26/c_desarrollo/software/arrendador.php?accion=ver" class="w3-bar-item w3-button">arrendadores</a>
    <a href="http://localhost/web/practica_inicial-master/brokers/gestion/g_2022_07_26/c_desarrollo/software/pago.php?accion=ver" class="w3-bar-item w3-button">pagos</a>
    <a href="http://localhost/web/practica_inicial-master/brokers/gestion/g_2022_07_26/c_desarrollo/software/propiedad.php?accion=ver" class="w3-bar-item w3-button">propiedades</a>
    <a href="http://localhost/web/practica_inicial-master/brokers/gestion/g_2022_07_26/c_desarrollo/software/contrato.php?accion=ver" class="w3-bar-item w3-button">contratos</a>
  </div>
</div>
<br><br>
<div class="w3-container">
  <h1>Personas registradas dentro del sistema</h1>
  <table id="person"></table>
</div>


</body>
</html>
<?php
}
