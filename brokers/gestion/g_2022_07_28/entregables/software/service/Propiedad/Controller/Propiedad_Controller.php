<?php

class Propiedad_Controller
{
	function verPropiedades()
	{
		$arrendador_View = new Propiedad_View();
		$arrendador_View->verPropiedades();		
	}
}
