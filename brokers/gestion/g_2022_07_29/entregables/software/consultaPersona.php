<?php

session_start();

if(isset($_SESSION["email"]) && isset($_SESSION["pass"]))
{
	if(isset($_GET["cedula"]))
	{
		$cedula = $_GET["cedula"];
		require_once "./service/ConsultaPersona/Model/ConsultaPersona_Model.php";
		require_once "./service/ConsultaPersona/Controller/ConsultaPersona_Controller.php";
		require_once "./service/ConsultaPersona/Template/Persona_Template.php";

		$consultaPersona_Controller = new ConsultaPersona_Controller();
		$data = $consultaPersona_Controller->getDataPersona($cedula);
		consultaPersonaDetalle($data);		
	}
}
