<?php

class Arrendador_View
{
	function verArrendadores()
	{
		$arrendador_Model = new Arrendador_Model();
		$arreglo = $arrendador_Model->verArrendadores();
		arrendador_Template($arreglo);	
	}
}
