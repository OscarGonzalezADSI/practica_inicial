<?php

class Contrato_Validation
{
	function validaDatos($request)
	{
		$persona = [];
		$persona['nombres'] = $request['nombres'];
		$persona['apellidos'] = $request['apellidos'];
		$persona['correo'] = $request['correo'];
		$persona['contrasena'] = $request['contrasena'];
		$persona['contrasenaP'] = $request['contrasenaP'];
		$persona['rolArrendador'] = $request['rolArrendador'];
		$persona['rolArrendatario'] = $request['rolArrendatario'];
		$persona['aceptaPoliticas'] = $request['aceptaPoliticas'];
		return 	$persona;
	}	
}
