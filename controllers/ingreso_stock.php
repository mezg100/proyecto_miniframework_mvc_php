<?php

//controllers/ingreso_stock.php

require '../fw/fw.php';
require '../models/Productos.php';
require '../models/Categoria.php';
require '../models/Stock.php';
require '../views/ingresostock.php';
require '../views/resultado.php';

Login::loginTrue();

$vista = new ingresostock();
$categoria = new Categoria();

if( !isset($_POST['categoria_id']) && !isset($_POST['producto_id'])){
	$vista->categorias = $categoria->getCategorias();
	$vista->render();
}

if( isset($_POST['categoria_id']) && !isset($_POST['producto_id'])){
	$producto = new Productos();
	$list_productos_categoria = $producto->productosCategoria($_POST['categoria_id']);
	$vista->productos = $list_productos_categoria;
	$vista->categoria_selec = $categoria->getCategoria($_POST['categoria_id']);
	$vista->render();
}

if( isset($_POST['producto_id']) && isset($_POST['cantidad'])){
	$stock = new stock();
	$vista_resultado = new resultado();
	$vista_resultado->titulo_html = "Ingreso stock";
	$vista_resultado->enlace_volver = "ingreso-stock";

	if( $stock->ingresoStock($_POST['producto_id'],$_POST['cantidad'])){
		$vista_resultado->resultado_mensaje = "stock ingresado correctamente";
	}
	else
	{
		$vista_resultado->resultado_mensaje = "Hubo un error en el ingreso. Verifique los datos ingresados";
	}
	
	$vista_resultado->render();	
}


?>