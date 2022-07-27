<?php
function viewPersons($arreglo)
{
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./css/styles.css">
<script src="./js/lib/NewTable/NewTable.js"></script>
<script src="./js/tables/TableDeveloper/TableDeveloper.js"></script>
<script src="./js/tables/TablePerson/TablePerson.js"></script>
<script src="./js/tables/TableProduct/TableProduct.js"></script>
<script src="./js/view/view.js"></script>
<script>const persons = <?php echo json_encode($arreglo); ?>;</script>
<script src="./js/main/main.js"></script>
</head>
<body>
  <h1>JavaScript HTML DOM Table eureka</h1>
  <table id="person"></table>
</body>
</html>
<?php
}
