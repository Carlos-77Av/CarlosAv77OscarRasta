
<?php
/*
require_once 'autoload.php';

if (isset($_GET['controller'])) {
	$nombre_controlador = strtolower($_GET['controller']) . 'Controller';
	if (class_exists($nombre_controlador)) {
		$controlador = new $nombre_controlador();
		if (isset($_GET['action'])) {
			$action = $_GET['action'];
			if (method_exists($controlador, $_GET['action'])) {
				$controlador->$action();
			}
			else{
				echo "<p>El metodo no existe</p>";
			}
		}
		else{
			echo "<p>No ha seleccionado un metodo valido</p>";
		}
	}
	else{
		echo "<p>El controlaador no existe</p>";
	}
}
else{
	echo "<p>El controlador no ha sido enviado</p>";
}

*/

require_once 'config/conexion/Conexion.php';

$conexion = new Conexion();
$conexion->conectar();