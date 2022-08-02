<?php

date_default_timezone_set("America/Bogota");
require_once './service/Persona/Model/conexion.php';
require_once './service/Persona/Validation/Persona_Validation.php';
require_once './service/Persona/Model/Persona_Model.php';
require_once './service/Persona/Template/Persona_Template.php';
require_once './service/Persona/View/Persona_View.php';
require_once './service/Persona/Controller/Persona_Controller.php';

if(isset($_GET['accion']))
{

	if($_GET['accion'] == "registrar")
	{
        $persona_Controller = new Persona_Controller();
	    $persona_Controller->registroUsuario();		
	}

	if($_GET['accion'] == "ver")
	{
        $persona_Controller = new Persona_Controller();
	    $persona_Controller->verUsuarios();	
	}

}
