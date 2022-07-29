<?php

date_default_timezone_set("America/Bogota");
require_once './service/Arrendador/Model/conexion.php';
require_once './service/Arrendador/Validation/Arrendador_Validation.php';
require_once './service/Arrendador/Model/Arrendador_Model.php';
require_once './service/Arrendador/Template/Arrendador_Template.php';
require_once './service/Arrendador/View/Arrendador_View.php';
require_once './service/Arrendador/Controller/Arrendador_Controller.php';

if(isset($_GET['accion']))
{
	if($_GET['accion'] == "ver")
	{
        $arrendador_Controller = new Arrendador_Controller();
	    $arrendador_Controller->verArrendadores();	
	}
}
