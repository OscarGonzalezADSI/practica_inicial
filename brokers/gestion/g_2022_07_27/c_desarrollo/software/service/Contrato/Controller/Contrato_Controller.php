<?php

class Contrato_Controller
{
	function verContratos()
	{
		$arrendador_View = new Contrato_View();
		$arrendador_View->verContratos();		
	}
}
