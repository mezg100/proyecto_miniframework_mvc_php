<?php

  require '../fw/fw.php';
  require '../models/Productos.php';
  require '../models/Stock.php';
  require '../views/resultado.php';

  Login::loginTrue();
  
    if(isset($_GET['id'])){
        $producto = new Productos();
        $producto_id = $_GET['id'];     
        $vista_resultado = new resultado();
        $vista_resultado->titulo_html = "Producto Eliminado";   
        $vista_resultado->enlace_volver = "listado-categorias";

       if( $producto->EliminarProducto($producto_id)){
        $vista_resultado->resultado_mensaje = "Producto Eliminado correctamente!";     
       }
      else{
        $vista_resultado->resultado_mensaje = "Error! Al Eliminar Producto";
       
      }
        $vista_resultado->render();
    }
    
?>

