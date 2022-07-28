<?php

class Arrendatario_Controller
{
	function verArrendatarios()
	{
		$arrendador_View = new Arrendatario_View();
		$arrendador_View->verArrendatarios();		
	}
}
