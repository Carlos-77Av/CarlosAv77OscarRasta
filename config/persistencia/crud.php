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

	public function insert($obj){
		try {
			$campos = implode("`, `", array_keys($obj));
			$valores = ":" . implode(", :", array_keys($obj));
			$this->sql = "INSERT INTO {$this->tabla} (`{$campos}`) VALUES ({$valores})";
			$this->ejecutar($obj);
			$id = $this->conexion->lastInsertId();
			return $id;
		} catch (Exception $e) {
			$e->getTraceAsString();
		}
	}

	private function ejecutar($obj = null){
		$sth = $this->conexion->prepare($this->sql);
		if ($obj !== null) {
			foreach ($obj as $llave => $valor) {
				if (empty($valor)) {
					$valor = null;
				}
				$sth->bindValue(":$llave", $valor);
			}
		}
		$sth->execute();
		$this->reiniciarValores();
		return $sth->rowcount();
	}

	private function reiniciarValores(){
		$this->wheres = "";
		$this->sql = null;
	}

}