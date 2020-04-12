
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
require_once 'config/persistencia/crud.php';

$crud = new Crud("categorias");



/*-----------	INSERT FUCNIONAL ESTA COMENTADO PARA NO HACER INSERCIONES INNECESARIAS	------------*/

/*
$crud->insert([
	"categoria" => "Limpieza",
	"user_cre" => "Davinchi",
	"fecha_crea" => "2020-04-11"
]);
*/

$lista = $crud->get();
echo "<pre>";
var_dump($lista);
echo "</pre>";
