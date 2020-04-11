<?php

class Conexion{

	private $conexion;
	private $configuracion = [
		"driver" => "mysql",
		"host" => "localhost",
		"database" => "tienda", 
		"port" => "80",
		"username" => "root",
		"password" => "",
		"charset" => "utf8mb4"
	];

	public function __construct(){

	}

	public function conectar(){
		try {
			$CONTROLADOR = $this->configuracion["driver"];
			$SERVIDOR = $this->configuracion["host"];
			$DATA_BASE = $this->configuracion["database"];
			$PUERTO = $this->configuracion["port"];
			$USUARIO = $this->configuracion["username"];
			$CLAVE = $this->configuracion["password"];
			$CODIFICACION = $this->configuracion["charset"];

			////////** OJO **\\\\\\\\\

			/*
				A mi no me funcionaba esto

				$url = "{$CONTROLADOR}:host={$SERVIDOR}:{$PUERTO};"
				. "dbname = {$DATA_BASE}; charset={$CODIFICACION}";

				Porque el Wampserver no esa el purto 80 segun y no se cual es el que usa por defecto
				cuando lo quite e funciono pero si en tu caso usa algun puerto en especifico podes
				usar ese cosigo de arriba por el $url que esta abajo y en el array de configuracion
				lo podes cambiar.

			*/

			$url = "{$CONTROLADOR}:host={$SERVIDOR};"
			. "dbname = {$DATA_BASE}; charset={$CODIFICACION}";
			//Se crea la codificacion
			$this->conexion = new PDO($url, $USUARIO, $CLAVE);
			echo "Conectado";
		} catch (Exception $e) {
			echo "Mierda";
			echo $e->getTraceAsString();
		}
	}
}