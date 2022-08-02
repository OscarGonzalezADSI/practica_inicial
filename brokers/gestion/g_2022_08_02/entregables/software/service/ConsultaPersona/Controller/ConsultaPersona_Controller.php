<?php

class ConsultaPersona_Controller
{
	function getDataPersona(String $consulta)
	{
		$consultarPersona = new ConsultaPersona_Model();
		$data = array();
	    $data['persons'] = $consultarPersona->personaPorCedula($consulta);
		$data['propiedades'] = $consultarPersona->propiedadPorCedula($consulta);
		$data['contratosArrendador'] = $consultarPersona->contratosComoArrendador($consulta);
		$data['contratosArrendatario'] = $consultarPersona->contratosComoArrendatario($consulta);
		$data['historicoPagos'] = $consultarPersona->historiaPagos($consulta);
		return $data;
	}
}
