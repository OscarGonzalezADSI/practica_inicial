<?php

date_default_timezone_set("America/Bogota");
require_once './service/Arrendatario/Model/conexion.php';
require_once './service/Arrendatario/Validation/Arrendatario_Validation.php';
require_once './service/Arrendatario/Model/Arrendatario_Model.php';
require_once './service/Arrendatario/Template/Arrendatario_Template.php';
require_once './service/Arrendatario/View/Arrendatario_View.php';
require_once './service/Arrendatario/Controller/Arrendatario_Controller.php';

if(isset($_GET['accion']))
{
	if($_GET['accion'] == "ver")
	{
        $arrendador_Controller = new Arrendatario_Controller();
	    $arrendador_Controller->verArrendatarios();	
	}
}
