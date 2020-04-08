<?php
include_once 'config/database.php';

class ModeloBase{
	public $db;
	public function __construct(){
		$this->db = database::conectar();
	}

	public function MostrarTodos($tabla){
		$query = $this->db->query("SELECT* FROM $tabla");
		return $query;
	}
}