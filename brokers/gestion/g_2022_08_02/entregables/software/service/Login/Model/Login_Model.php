<?php

class Login_Model
{
	function __construct($orden = "", $persona = [])
	{
		$this->conexion = new Conexion();
	}
	
	function getIdPersonaPor($correo, $contrasena)
	{
		require_once 'conexion.php';
		$conexion = new Conexion();
		$arreglo = array();
		$consulta = "SELECT persona.id_persona
                    FROM persona 
                    WHERE persona.correo = :correo
                    AND persona.contrasena = :contrasena";
		$modules = $conexion->prepare($consulta);
		$modules->bindParam(":correo", $correo);
		$modules->bindParam(":contrasena", $contrasena);
		$modules->execute();
		$total = $modules->rowCount();
		if ($total > 0) {
			$i = 0;
			while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
				$arreglo[$i] = $data;
				$i++;
			}
			return $arreglo[0]["id_persona"];	
		}
		else{
			return 0;
		}
	}
	
	function getCedulaPor($correo, $contrasena)
	{
		require_once 'conexion.php';
		$conexion = new Conexion();
		$arreglo = array();
		$consulta = "SELECT persona.cedula
                    FROM persona 
                    WHERE persona.correo = :correo
                    AND persona.contrasena = :contrasena";
		$modules = $conexion->prepare($consulta);
		$modules->bindParam(":correo", $correo);
		$modules->bindParam(":contrasena", $contrasena);
		$modules->execute();
		$total = $modules->rowCount();
		if ($total > 0) {
			$i = 0;
			while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
				$arreglo[$i] = $data;
				$i++;
			}
			return $arreglo[0]["cedula"];	
		}
		else{
			return 0;
		}
	}
	
	function getPersonaPor($cedula)
	{
		require_once 'conexion.php';
		$conexion = new Conexion();
		$arreglo = array();
		$consulta = "SELECT
					vista_login.id_persona, 
					vista_login.nombres, 
					vista_login.apellidos, 
					vista_login.correo, 
					vista_login.cedula, 
					vista_login.celular, 
					vista_login.direccion, 
					vista_login.rolArrendador, 
					vista_login.rolArrendatario, 
					vista_login.aceptaPoliticas, 
					vista_login.fecha_registro 
					FROM vista_login
					WHERE vista_login.cedula = :cedula";
		$modules = $conexion->prepare($consulta);
		$modules->bindParam(":cedula", $cedula);
		$modules->execute();
		$total = $modules->rowCount();
		if ($total > 0) {
			$i = 0;
			while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
				$arreglo[$i] = $data;
				$i++;
			}
		    return $arreglo[0];
		}else{
		    return 0;
		}
	}
	
	function getPersonaPorId($id_persona)
	{
		require_once 'conexion.php';
		$conexion = new Conexion();
		$arreglo = array();
		$consulta = "SELECT
					vista_login.id_persona, 
					vista_login.nombres, 
					vista_login.apellidos, 
					vista_login.correo, 
					vista_login.cedula, 
					vista_login.celular, 
					vista_login.direccion, 
					vista_login.rolArrendador, 
					vista_login.rolArrendatario, 
					vista_login.aceptaPoliticas, 
					vista_login.fecha_registro 
					FROM vista_login
					WHERE vista_login.id_persona = :id_persona";
		$modules = $conexion->prepare($consulta);
		$modules->bindParam(":id_persona", $id_persona);
		$modules->execute();
		$total = $modules->rowCount();
		if ($total > 0) {
			$i = 0;
			while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
				$arreglo[$i] = $data;
				$i++;
			}
		    return $arreglo[0];
		}else{
		    return 0;
		}
	}
}
