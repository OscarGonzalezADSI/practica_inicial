<?php

class Pago_View
{
	function verPagos()
	{
		$arrendador_Model = new Pago_Model();
		$arreglo = $arrendador_Model->verPagos();
		pago_Template($arreglo);	
	}
}
