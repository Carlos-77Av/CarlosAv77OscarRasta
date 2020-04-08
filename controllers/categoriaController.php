<?php

class categoriaController{

	public function MostrarCategoria(){
		require_once 'models/categoriaModel.php';
		$categoria = new Categoria();
		$categorias = $categoria->MostrarTodos("categorias");

		require_once 'views/categoria/mostrar.php';
	}
}