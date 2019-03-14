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
	



	 	//almacena imagen en el servidor

	 	if ($_FILES['imagen']['error']) 
{

	switch ($_FILES['imagen']['errores']) {
		case 1: //exceso de tamaño de archivo en php ini
			echo "El tamaño del archivo excede lo permitido por el servidor";
			break;
		
		case 2: //error tamaño archivo marcado desde formulario
			echo "el tamaño del archivo excede 2 MB";
			break;
		case 3: //Corrupcion de archivo
			echo "El envio de  archivo se interrumpio";
			break;
		
		case 4: // No hay fichero
			echo "No se ha enviado ningun archivo";
			break;
	}
}else 
{
	if (isset($_FILES['imagen']['name']) && $_FILES['imagen']['error']==UPLOAD_ERR_OK) 
	{
		$rutaDestino = '../imagenes/';
		

		move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaDestino.$_FILES['imagen']['name']);
		echo "el archivo ".$_FILES['imagen']['name']."se ha copiado a la carpeta de destino";
		
	}else{
		echo "el archivo no se ha podido copiar a la carpeta de destino";
	}




}





	 	$manager = new Manager($mbd); 
	 	$objeto = new ObjetoBlog(); 


	 	//insertar campos del formulario en el objeto
	 	$titulo = htmlentities(addslashes ($_POST['titulo']));
	 	$comentario = htmlentities(addslashes ($_POST['comentario']));
	 	$imagen = htmlentities(addslashes ( $_FILES["imagen"]["name"]));

		$objeto->setId(NULL);
		$objeto->setTitulo($titulo);
		$objeto->setFecha(date('Y-m-d H:i:s'));
		$objeto->setComentario($comentario);
		$objeto->setImagen($imagen);


		//manager setea datos del objeto en la base de datos
	 	$manager->create($objeto);





 	} catch (PDOException $e) {
	    echo 'Falló la conexión: ' . $e->getMessage();
	}

	//cerrar conexion
	$mbd=null;

?>