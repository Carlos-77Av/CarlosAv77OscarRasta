<?php


class Crud{

	protected $tabla;
	protected $conexion;
	protected $wheres = "";
	protected $sql = null;

	public function __construct($tabla = null){
		$this->conexion = (new Conexion())->conectar();
		$this->tabla = $tabla;
	}

	public function get(){
		try {
			$this->sql = "SELECT * FROM {$this->tabla} {$this->wheres}";
			$sth = $this->conexion->prepare($this->sql);
			$sth->execute();
			return $sth->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			echo $e->getTraceAsString();
		}
	}
}