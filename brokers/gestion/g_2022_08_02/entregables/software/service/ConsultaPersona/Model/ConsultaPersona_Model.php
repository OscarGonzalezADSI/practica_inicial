<?php

class ConsultaPersona_Model
{
	function personaPorCedula($cedula)
	{
		require_once 'conexion.php';
		$conexion = new Conexion();
		$arreglo = array();
		$consulta = "SELECT
					nombres, 
					apellidos, 
					correo,
					cedula, 
					celular, 
					direccion,
					fecha_registro
					FROM persona
                    WHERE cedula LIKE ?";
		$params = array("%$cedula%");
		$modules = $conexion->prepare($consulta);
		$modules->execute($params);
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
	
	function propiedadPorCedula($cedula)
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
					FROM vista_propiedad 
                    WHERE cedula LIKE ?";
		$params = array("%$cedula%");
		$modules = $conexion->prepare($consulta);
		$modules->execute($params);
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
	
	function contratosComoArrendador($cedula)
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
					FROM vista_contratos
                    WHERE cedula_arrendador LIKE ?";
		$params = array("%$cedula%");
		$modules = $conexion->prepare($consulta);
		$modules->execute($params);
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
	
	function contratosComoArrendatario($cedula)
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
					FROM vista_contratos
                    WHERE cedula_arrendatario LIKE ?";
		$params = array("%$cedula%");
		$modules = $conexion->prepare($consulta);
		$modules->execute($params);
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
	
	function historiaPagos($cedula)
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
					FROM vista_pagos
                    WHERE cedula LIKE ?";
		$params = array("%$cedula%");
		$modules = $conexion->prepare($consulta);
		$modules->execute($params);
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
