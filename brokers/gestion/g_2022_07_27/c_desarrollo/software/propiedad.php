<?php

date_default_timezone_set("America/Bogota");
require_once './service/Propiedad/Model/conexion.php';
require_once './service/Propiedad/Validation/Propiedad_Validation.php';
require_once './service/Propiedad/Model/Propiedad_Model.php';
require_once './service/Propiedad/Template/Propiedad_Template.php';
require_once './service/Propiedad/View/Propiedad_View.php';
require_once './service/Propiedad/Controller/Propiedad_Controller.php';

if(isset($_GET['accion']))
{
	if($_GET['accion'] == "ver")
	{
        $propiedad_Controller = new Propiedad_Controller();
	    $propiedad_Controller->verPropiedades();	
	}
}
