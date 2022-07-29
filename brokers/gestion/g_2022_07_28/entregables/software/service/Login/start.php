<?php

session_start();

$_SESSION["email"] = "oscar";
$_SESSION["pass"] = "aldana";
$_SESSION["rol"] = "admin";

header("Location: ../../index.php");
