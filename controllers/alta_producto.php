<?php
//controllers/alta_producto.php

require '../fw/fw.php';
require '../models/Productos.php';
require '../models/Stock.php';
require '../models/Categoria.php';
require '../views/altaproducto.php';
require '../views/resultado.php';


Login::loginTrue();

	if(count($_POST) > 0 ){
		if( !isset($_POST['categoria'])) die("Error1-Insertarproducto");
		if( !isset($_POST['producto_id'])) die("Error2-Insertarproducto");
		if( !isset($_POST['nombre'])) die("Error3-Insertarproducto");
		if( !isset($_POST['precio'])) die("Error4-Insertarproducto");

		$producto = new Productos();
		$vista_resultado = new resultado();
		$vista_resultado->titulo_html = "Alta Producto";
		if( $producto->CrearProducto($_POST['producto_id'],$_POST['nombre'],$_POST['precio'],$_POST['categoria']) ){
			 $vista_resultado->resultado_mensaje = "Producto ingresado correctamente";
		}
		else
		{	 
			$vista_resultado->resultado_mensaje = "Ya existe un producto con codigo " . $_POST['producto_id'] ."   Verifique los datos ingresados.";
		}

		$vista_resultado->render();
	}
	else		
	{ 	
		$categorias = new Categoria();
		$todas = $categorias->getCategorias();
		$vista = new altaproducto();
		$vista->categorias = $todas;
		$vista->render();
    }



?>