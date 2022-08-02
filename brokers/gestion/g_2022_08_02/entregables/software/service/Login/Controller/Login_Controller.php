<?php

class Login_Controller
{	
	function getIdPersonaPor($correo, $contrasena)
	{
		$login = new Login_Model();
		$id_persona = $login->getIdPersonaPor($correo, $contrasena);
		return $id_persona;
	}
	
	function getCedulaPor($correo, $contrasena)
	{
		$login = new Login_Model();
		$cedula = $login->getCedulaPor($correo, $contrasena);
		return $cedula;
	}
	
	function getPersonaPor($cedula)
	{
		$login = new Login_Model();
		$persona = $login->getPersonaPor($cedula);
		return $persona;
	}
	
	function getPersonaPorId($id_persona)
	{
		$login = new Login_Model();
		$persona = $login->getPersonaPorId($id_persona);
		return $persona;
	}
}
