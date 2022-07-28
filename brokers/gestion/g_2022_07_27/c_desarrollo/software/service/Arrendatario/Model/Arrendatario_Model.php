<?php

class Arrendatario_Model
{
	function __construct($orden = "", $persona = [])
	{
		$this->conexion = new Conexion();
		if($orden == "registrar"){
		    $this->insertarPersona($persona);			
		}
	}
	
	function verArrendatarios()
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
					reg_peronsa, 
					reg_arrendador 
					FROM vista_arrendatarios";
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
