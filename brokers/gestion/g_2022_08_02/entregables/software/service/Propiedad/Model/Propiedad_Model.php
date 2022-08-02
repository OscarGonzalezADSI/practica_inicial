<?php

class Propiedad_Model
{
	function __construct($orden = "", $persona = [])
	{
		$this->conexion = new Conexion();
	}
	
	function verPropiedades()
	{
		require_once 'conexion.php';
		$conexion = new Conexion();
		$arreglo = array();
		$consulta = "SELECT 
		             cedula, 
					 ciudad, 
					 barrio, 
					 direccion, 
					 fecha_registro 
					 FROM vista_propiedad;";
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
