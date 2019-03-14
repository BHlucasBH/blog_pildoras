<?php
	require_once("../model/ObjetoBlog.php");
	require_once("../model/Manager.php");

	try {

		$dsn = 'mysql:host=localhost;dbname=bddblog';
		$usuario = 'root';
		$contraseña = '';

		//conecar base de datos
	    $mbd = new PDO($dsn, $usuario, $contraseña);
	    $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	

	$manager = new Manager($mbd); 
	

	$items = $manager->read();




	} catch (PDOException $e) {
	    echo 'Falló la conexión: ' . $e->getMessage();
	}
	//cerrar conexion
	$mbd=null;
?>