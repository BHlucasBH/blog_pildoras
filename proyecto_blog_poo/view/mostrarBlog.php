<?php
	
	echo " Esto es la galeria  <br/>";
	 require("../controller/getController.php");





	foreach($items as $row) {


		printf ("<h3>".$row->getTitulo()."</h3>");
		echo "<br/>";
		printf ( "<h4>".$row->getFecha()."</h4>");
		echo "<br/>";
		printf ("<div style='width: 500px'>".$row->getComentario()."</div>");
		echo "<br/>";
		echo "<img width='200' height='300' src='../imagenes/".$row->getImagen()."'>";
	

		echo "<hr/>";


	}



?>