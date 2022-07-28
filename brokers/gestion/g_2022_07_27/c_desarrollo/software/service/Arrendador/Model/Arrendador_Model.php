<?php

class Arrendador_Model
{
	function __construct($orden = "", $persona = [])
	{
		$this->conexion = new Conexion();
		if($orden == "registrar"){
		    $this->insertarPersona($persona);			
		}
	}
	
	function verArrendadores()
	{
		require_once 'conexion.php';
		$conexion = new Conexion();
		$arreglo = array();
		$consulta = "SELECT
					nombres, 
					apellidos, 
					cedula, 
					celular, 
					direccion, 
					reg_persona, 
					reg_arrendador 
					FROM vista_arrendadores";
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
