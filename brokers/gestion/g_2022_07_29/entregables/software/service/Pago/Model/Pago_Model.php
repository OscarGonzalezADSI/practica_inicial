<?php

class Pago_Model
{
	function __construct($orden = "", $persona = [])
	{
		$this->conexion = new Conexion();
	}
	
	function verPagos()
	{
		require_once 'conexion.php';
		$conexion = new Conexion();
		$arreglo = array();
		$consulta = "SELECT 
					id_pago, 
					cedula, 
					nombres, 
					apellidos, 
					celular, 
					monto_pago, 
					ciudad, 
					barrio, 
					direccion, 
					fecha_registro 
					FROM vista_pagos;";
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
