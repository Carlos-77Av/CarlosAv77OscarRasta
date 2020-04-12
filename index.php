
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
require_once 'config/persistencia/modelos/ModeloGenerico.php';
require_once 'config/persistencia/modelos/categorias.php';

$crud = new Crud("categorias");



/*-----------	INSERT FUCNIONAL ESTA COMENTADO PARA NO HACER INSERCIONES INNECESARIAS	------------*/

/*
$crud->insert([
	"categoria" => "Limpieza",
	"user_cre" => "Davinchi",
	"fecha_crea" => "2020-04-11"
]);



$filasAfectadas = $crud->where("id_categoria", "=", 4)->update([
	"categoria" => "Cocina"
]);

$eliminados = $crud->where("id_categoria", "=", 6)->delete();

echo "<h1>Se afectaron $filasAfectadas datos</h1>";
echo "<h1>Se eliminaron $eliminados datos</h1>";

$lista = $crud->get();
echo "<pre>";
var_dump($lista);
echo "</pre>";
*/

$modeloCategoria = new Categorias();
$modeloCategoria->setCategoria("Alcohol");
$modeloCategoria->setUser_cre("Carlos77Av");
$modeloCategoria->setFecha_crea("2020-04-04");
$modeloCategoria->insert();

$lista = $modeloCategoria->get();
echo "<pre>";
var_dump($lista);
echo "</pre>";