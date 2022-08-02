<?php

class Arrendatario_View
{
	function verArrendatarios()
	{
		$arrendador_Model = new Arrendatario_Model();
		$arreglo = $arrendador_Model->verArrendatarios();
		arrendatario_Template($arreglo);	
	}
}
