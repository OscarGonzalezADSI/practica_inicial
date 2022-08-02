<?php

class Persona_View
{
	function verPersonaPorCorreo($persona)
	{
		$persona_Model = new Persona_Model();
		$arreglo = $persona_Model->verPorCorreo($persona['correo']);
		viewPersons($arreglo);	
	}
	
	function verTodoUsuario()
	{
		$persona_Model = new Persona_Model();
		$arreglo = $persona_Model->verTodoUsuario();
		viewPersons($arreglo);	
	}
}
