<?php

include_once("config/config.php");
$Database=new Database();

$plantilla=new Smarty;

$listado = $Database->consultarUsuarios();
$buffer="";

foreach ($listado as $row){
	
	$btn_actualizar="<a href='actualizar_usuario.php?id={$row['id_usu']}' class='btn btn-primary'>Editar</a>";
	$btn_borrar="<a href='eliminar_usuario.php?id={$row['id_usu']}' class='btn btn-danger'>Eliminar</a>";

	$buffer.="<tr><td>{$row['nomn_usu']} {$row['ape_usu']}</td> <td>{$row['email']}</td> <td>{$row['pais_usu']}</td>
				<td>$btn_actualizar $btn_borrar</td></tr>";
}

$plantilla->assign("tbody",$buffer);

$plantilla->assign("NOM_MODULO","Listado de usuarios");
$plantilla->assign("unknown",(isset($_GET[',unknown'])?"Revise la contraseña indicada":""));
$plantilla->assign("MENU","SI");
$plantilla->assign("CONTENIDO_MODULO",$plantilla->fetch("_main.html"));
$plantilla->display("_generic.html");
?>