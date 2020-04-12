<?php

class Categorias extends Crud{

	protected $id_categoria;
	protected $categoria;
	protected $user_cre;
	protected $fecha_crea;

	public function __construct($propiedades = null){
		parent::__construct("categorias", Usuarios::class, $propiedades);
	}

	public function getId_categoria(){
		return $this->id_categoria;
	}

	public function setId_categoria($id_categoria){
		$this->id_categoria = $id_categoria;
	}

	public function getCategoria(){
		return $this->categoria;
	}

	public function setCategoria($categoria){
		$this->categoria = $categoria;
	}

	public function getUser_cre(){
		return $this->user_cre;
	}

	public function setUser_cre($user_cre){
		$this->user_cre = $user_cre;
	}

	public function getFecha_crea(){
		return $this->fecha_crea;
	}

	public function setFecha_crea($fecha_crea){
		$this->fecha_crea = $fecha_crea;
	}
}