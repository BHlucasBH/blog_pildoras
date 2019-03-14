<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
	<style type="text/css">
		
		table{
			width: 50%;
			margin: auto;
			background-color: grey;
			padding: 5px;

		}
		td{
			padding: 0;
		}

	</style>
</head>
<body>


<form action="../controller/setController.php" method="POST" enctype="multipart/form-data" name="form1">
	<table>
		<tr>
			<td>
				<label for="titulo">  Título:	 </label>
			</td>	
			<td>
				<input type="text" name="titulo">	
			</td>	
		</tr>
		<tr>
			<td>
				<label for="comentarios">  comentarios:	 </label>			
			</td>	
			<td>
				<textarea rows="10" cols="50" name="comentario"></textarea>	
			</td>	
		</tr>

		<tr>
			<input type="hidden" name="MAX_TAM" value="2097152">
		</tr>


		<tr>
			<td colspan="2" align="center">
				Seleccione una imagen con un tamaño inferior a 2 MB
			</td>	
		</tr>

		<tr>
			<td colspan="2" align="center">
				<input type="file" name="imagen">
			</td>	
		</tr>

		<tr>
			<td colspan="2"  align="center"> 
				<input type="submit" name="enviar">
			</td>	
		</tr>

		<tr>
			<td colspan="2"  align="center">
				<a href="mostrarBlog.php" > Mostrar Blog</a>
			</td>	
		</tr>





	</table>

</form>



</body>
</html>