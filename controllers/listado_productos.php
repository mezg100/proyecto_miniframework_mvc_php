<?php

//controllers/listado_productos.php

require '../fw/fw.php';
require '../models/Productos.php';
require '../models/Categoria.php';
require '../views/listaproductos_categoria.php';

Login::loginTrue();

	if( isset($_GET['categoria_id'])){
		$producto = new Productos();
		$list_productos_categoria = $producto->productosCategoria($_GET['categoria_id']);
		$vista = new listaproductos_categoria();
		$categoria = new Categoria();
		$vista->productos = $list_productos_categoria;
		$vista->categoria = $categoria->getCategoria($_GET['categoria_id']);
		$vista->render();
	}

?>