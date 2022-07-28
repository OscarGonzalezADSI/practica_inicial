<?php

class Propiedad_View
{
	function verPropiedades()
	{
		$arrendador_Model = new Propiedad_Model();
		$arreglo = $arrendador_Model->verPropiedades();
		propiedad_Template($arreglo);	
	}
}
