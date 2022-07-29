<?php

class Contrato_Model
{
	function __construct($orden = "", $persona = [])
	{
		$this->conexion = new Conexion();
	}
	
	function verContratos()
	{
		require_once 'conexion.php';
		$conexion = new Conexion();
		$arreglo = array();
		$consulta = "SELECT
		            id_contrato,
					cedula_arrendador, 
					cedula_arrendatario, 
					ciudad, 
					barrio, 
					direccion 
					FROM vista_contratos;";
		$modules = $conexion->prepare($consulta);
		$modules->execute();
		$total = $modules->rowCount();
		if ($total > 0) {
			$i = 0;
			while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
				$arreglo[$i] = $data;
				$i++;
			}
		}
		return $arreglo;
	}
}
