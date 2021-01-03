<?php
  //Controller/modificar_producto

  require '../fw/fw.php';
  require '../models/Productos.php';
  require '../views/modificar_producto.php';
  require '../views/resultado.php';

  Login::loginTrue();

   if( isset($_GET['id'])){
   		$producto = new Productos();
   		if( is_null($producto->buscarProductoId($_GET['id']))) die("Error1-Modificar-producto");
	    $producto_id = $_GET['id'];
	    $datos = $producto->VerDetalleProducto($producto_id);
	    $vista = new modificar_producto();
	    $vista->datos_producto = $datos;
    }

	if( count($_POST) > 0 ) {
	      	if(!isset($_POST['nombre'])) die("Error2-Modificar-producto");
	      	if(!isset($_POST['precio'])) die("Error3-Modificar-producto");
	      	if(!isset($_POST['id'])) die("Error4-Modificar-producto");
	      	$producto_id = $_POST['id'];
	      	$nombre = $_POST['nombre'];
	      	$precio = $_POST['precio'];

	      	$vista_resultado = new resultado();
		    $vista_resultado->titulo_html = "Modificar Producto";

		    if( $producto->ModificarProducto($producto_id,$nombre,$precio)){
		        $vista_resultado->resultado_mensaje = "Producto modificado correctamente";
		    }
		    else{
		    $vista_resultado->resultado_mensaje = "Error Al Modificar Producto";
		    }
		    $vista_resultado->render();
	}

	if(	 isset($_GET['id']) && !count($_POST) > 0 ) $vista->render(); 

?>