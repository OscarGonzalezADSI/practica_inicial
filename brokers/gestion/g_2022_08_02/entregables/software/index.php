<?php

session_start();

require_once './service/Login/Model/conexion.php';
require_once './service/Login/Model/Login_Model.php';
require_once './service/Login/Controller/Login_Controller.php';
require_once './service/Login/Template/toHome.php';
require_once './service/Login/Template/toPrincipal.php';

if(isset($_SESSION["email"]) && isset($_SESSION["pass"]))
{
    $correo = $_SESSION["email"];
    $contrasena = $_SESSION["pass"];
	$login = new Login_Controller();
	$id_persona = $login->getIdPersonaPor($correo, $contrasena);
	$persona = $login->getPersonaPorId($id_persona);
    if(isset($persona["id_persona"]))
	{
	    toHome($persona);		
	}else{
		header("Location: ./service/Login/out.php");
	}
}else
{
    toPrincipal();
}
