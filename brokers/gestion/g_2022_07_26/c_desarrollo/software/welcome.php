<?php

date_default_timezone_set("America/Bogota");
require_once './Persona/Model/conexion.php';
require_once './Persona/Validation/Persona_Validation.php';
require_once './Persona/Model/Persona_Model.php';
require_once './Persona/Template/Persona_Template.php';
require_once './Persona/View/Persona_View.php';
require_once './Persona/Controller/Persona_Controller.php';

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
