<?php


class ObjetoBlog{


//atributos 
	private $id;
	private $titulo;
	private $fecha;
	private $comentario;
	private $imagen;


//metodos

	//setters

	public function setId($id)
	{
		$this->id=$id;
	}

	public function setTitulo($titulo)
	{
		$this->titulo=$titulo;
	}

	public function setFecha($fecha)
	{
		$this->fecha=$fecha;
	}

	public function setComentario($comentario)
	{
		$this->comentario=$comentario;
	}	

	public function setImagen($imagen)
	{
		$this->imagen=$imagen;
	}	


	//getters

	public function getId()
	{
		return $this->id;
	}

	public function getTitulo()
	{
		return $this->titulo;
	}

	public function getFecha()
	{
		return $this->fecha;
	}

	public function getComentario()
	{
		return $this->comentario;
	}	

	public function getImagen()
	{
		return $this->imagen;
	}


}


?>