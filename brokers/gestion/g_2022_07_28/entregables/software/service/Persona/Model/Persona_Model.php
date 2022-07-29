<?php

class Persona_Model
{
	function __construct($orden = "", $persona = [])
	{
		$this->conexion = new Conexion();
		if($orden == "registrar"){
		    $this->insertarPersona($persona);			
		}
	}
	
	function insertarPersona($persona)
	{
		$id_persona = Null;
		$nombres = $persona['nombres'];
		$apellidos = $persona['apellidos'];
		$correo = $persona['correo'];
		$contrasena = $persona['contrasena'];
		$contrasenaP = $persona['contrasenaP'];
		$rolArrendador = $persona['rolArrendador'];
		$rolArrendatario = $persona['rolArrendatario'];
		$aceptaPoliticas = $persona['aceptaPoliticas'];
		$sql = "INSERT INTO persona(
				id_persona, nombres, apellidos, 
				correo, contrasena, contrasenaP, 
				rolArrendador, rolArrendatario, 
				aceptaPoliticas
				)VALUES (?,?,?,?,?,?,?,?,?)";
		$reg = $this->conexion->prepare($sql);
		$reg->bindParam(1, $id_persona);
		$reg->bindParam(2, $nombres);
		$reg->bindParam(3, $apellidos);
		$reg->bindParam(4, $correo);
		$reg->bindParam(5, $contrasena);
		$reg->bindParam(6, $contrasenaP);
		$reg->bindParam(7, $rolArrendador);
		$reg->bindParam(8, $rolArrendatario);
		$reg->bindParam(9, $aceptaPoliticas);
		$reg->execute();	
	}
	
	function verPorCorreo($correo)
	{
		require_once 'conexion.php';
		$conexion = new Conexion();
		$arreglo = array();
		$consulta = "SELECT
		             nombres,
		             apellidos,
		             correo,
		             fecha_registro
                     FROM persona 
                     WHERE correo = :correo";
		$modules = $conexion->prepare($consulta);
		$modules->bindParam(":correo", $correo);
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
	
	function verTodoUsuario()
	{
		require_once 'conexion.php';
		$conexion = new Conexion();
		$arreglo = array();
		$consulta = "SELECT
		             nombres,
		             apellidos,
		             correo,
		             fecha_registro
                     FROM persona";
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
