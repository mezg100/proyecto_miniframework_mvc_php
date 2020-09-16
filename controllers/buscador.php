<?php

//Controllers/buscador.php

require '../fw/fw.php';
require '../models/Productos.php';
require '../views/Buscador.php';


Login::loginTrue();

$productos = new Productos();
$todos = $productos->ObtenerTodos();

$vista = new Buscador();
$vista->productos = $todos;


    if(count($_POST)>0){
	    if(isset($_POST['busqueda'])){        
	        $busqueda = $_POST['busqueda'];
	        $buscar =  $productos->BuscarProductoNom($busqueda);
	        $vista->productos = $buscar;
	        $vista->render();        
	    }
	}else
   $vista->render();

?>