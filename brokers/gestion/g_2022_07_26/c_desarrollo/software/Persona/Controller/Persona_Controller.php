<?php

class Persona_Controller
{
	function registroUsuario()
	{
		$orden = $_GET['accion'];
		$persona_Validation = new Persona_Validation();
		$persona = $persona_Validation->validaDatos($_POST);
		$persona_Model = new Persona_Model($orden, $persona);
		$persona_View = new Persona_View();
		$persona_View->verPersonaPorCorreo($persona);			
	}
	
	function verUsuarios()
	{
		$persona_View = new Persona_View();
		$persona_View->verTodoUsuario();		
	}
}
