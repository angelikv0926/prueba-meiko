<?php

include_once("config/config.php");

$Database=new Database();

unset($_SESSION['USUARIO_AA']['Usuario']);
unset($_SESSION['FiltroWork']);
header("location: .");
die();
?>