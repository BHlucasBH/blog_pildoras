<?php
	
	class Manager{

		private $conexion;

		function __construct($mbd){

			$this->setConnection($mbd);
		

		}


	function setConnection(PDO $mbd){

		$this->conexion = $mbd;
	}



	//create
	//setea obejeto a bdd
	
		function create(ObjetoBlog $objeto){

				
			$sql="INSERT INTO `contenido` (`id`, `titulo`, `fecha`, `comentario`, `imagen`) VALUES (?,?,?,?,?);";
			$stmt= $this->conexion->prepare($sql);
			$stmt->execute([$objeto->getId(), $objeto->getTitulo(), $objeto->getFecha(), $objeto->getComentario(), $objeto->getImagen()]);
			echo "insertado correctamente";
			$stmt=null;


		}

	


		//read
		//setea bdd a objeto

		function read(){

		
			$matriz=array();
			$contador=0;

			foreach($this->conexion->query('SELECT * from contenido ORDER BY fecha DESC') as $fila) {

				$objeto = new ObjetoBlog();
				$objeto->setId($fila["id"]);
				$objeto->setTitulo($fila["titulo"]);
				$objeto->setFecha($fila["fecha"]);
				$objeto->setComentario($fila["comentario"]);
				$objeto->setImagen($fila["imagen"]);

				$matriz[$contador]=$objeto;
				$contador++;
			}

			return $matriz;


		}

	
	}
?>