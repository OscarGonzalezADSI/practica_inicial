<?php

class Contrato_View
{
	function verContratos()
	{
		$arrendador_Model = new Contrato_Model();
		$arreglo = $arrendador_Model->verContratos();
		contrato_Template($arreglo);	
	}
}
