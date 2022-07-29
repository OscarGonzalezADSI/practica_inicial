<?php

date_default_timezone_set("America/Bogota");
require_once './service/Pago/Model/conexion.php';
require_once './service/Pago/Validation/Pago_Validation.php';
require_once './service/Pago/Model/Pago_Model.php';
require_once './service/Pago/Template/Pago_Template.php';
require_once './service/Pago/View/Pago_View.php';
require_once './service/Pago/Controller/Pago_Controller.php';

if(isset($_GET['accion']))
{
	if($_GET['accion'] == "ver")
	{
        $pago_Controller = new Pago_Controller();
	    $pago_Controller->verPagos();	
	}
}
