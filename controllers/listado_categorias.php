<?php

//controllers/listado_categorias.php

require '../fw/fw.php';
require '../models/Categoria.php';
require '../models/Productos.php';
require '../views/listacategorias.php';

//Login::loginTrue();

$categoria = new Categoria();
$list_categorias = $categoria->getCategorias();
$productos = new Productos();
$vista = new listacategorias();

$vista->categorias = $list_categorias;
$vista->ruta_productos = "productos-categoria-";
$vista->cantidad = $productos->cantidadProductosCategoria($list_categorias);
$vista->render();

?>



