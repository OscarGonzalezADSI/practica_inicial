<?php

session_start();

$_SESSION["email"] = $_POST["usuarioLogin"];
$_SESSION["pass"] = $_POST["contrasenaLogin"];
$_SESSION["rol"] = "admin";

header("Location: ../../index.php");
