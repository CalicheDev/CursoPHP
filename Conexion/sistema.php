<?php 
require_once ("autoload.php");

	$objUsuario = new Usuario();	

	//Insertar usuario
	//$insert = $objUsuario->insertUsuario("Carlos",3040585978,"calicheinfo@gmail.com");
	//echo $insert;
	//
	//Extrae todos los registros de la tabla usuario
	$users = $objUsuario->getUsuarios();
	print_r("<pre>");
	print_r($users);
	print_r("</pre>");

	$updateUser = $objUsuario->updateUser(5,"Julia",11252245,"julisbapa@gmail.com");
	echo $updateUser;

	$user = $objUsuario->getUser(5);
	print_r("<pre>");
	print_r($user);
	print_r("</pre>");

	$delete = $objUsuario->deluser(5);
	echo $delete;

 ?>