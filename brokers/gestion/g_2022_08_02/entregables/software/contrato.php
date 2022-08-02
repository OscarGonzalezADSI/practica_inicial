<?php

date_default_timezone_set("America/Bogota");
require_once './service/Contrato/Model/conexion.php';
require_once './service/Contrato/Validation/Contrato_Validation.php';
require_once './service/Contrato/Model/Contrato_Model.php';
require_once './service/Contrato/Template/Contrato_Template.php';
require_once './service/Contrato/View/Contrato_View.php';
require_once './service/Contrato/Controller/Contrato_Controller.php';

if(isset($_GET['accion']))
{
	if($_GET['accion'] == "ver")
	{
        $contrato_Controller = new Contrato_Controller();
	    $contrato_Controller->verContratos();	
	}
}
