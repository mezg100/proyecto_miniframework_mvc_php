<!DOCTYPE html>

<html lang="es">
	<head>
		<title>Productos de la categoria <?= $this->categoria['nombre']?> </title>
		<meta charset="utf-8" />		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/tabla_productos.css">
		<script defer type="text/javascript" src="js/eliminar.js"></script>
	</head>

<body>

	<?php if( $this->productos ){ ?>

		<h1 class="bg-primary">Listado de productos de la categoria <?= $this->categoria['nombre']?> </h1>
		
		<table class="table table-hover table-dark table-bordered tabla" >
			<tr class="bg-danger">
			<th>Producto</th> 
			<th>Precio</th> 
			<th>Stock</th> 
			<th>Eliminar</th> 
			<th>Modificar</th>
			</tr>
			 <?php foreach( $this->productos as $producto ){ ?>
				<tr>
				 <td><?= $producto['nombre'] ?></td> <td>$<?= $producto['precio'] ?></td><td><?= $producto['stock'] ?>
				 <td><a href="eliminar-producto-<?=$producto['producto_id']?>" class="btn btn-danger eliminar">Eliminar</a></td>
				 <td><a href="modificar-producto-<?=$producto['producto_id']?>" class="btn btn-warning">Modificar</a></td>
				</tr>
			<?php } ?>
		</table>

	<a href="listado-categorias" class="float-right btn btn-danger btn-volver">Volver</a>

	
	
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

	<?php }
		  else
		  { ?>
		  	<p class=" bg-danger  text-white d-flex text-uppercase h3 align-items-center justify-content-center" style="height:150px"> No hay productos para la categoria <?= $this->categoria['nombre']?> </p>
		  	<a href="listado-categorias" class="float-right btn btn-danger btn-volver">Volver</a>
	<?php } ?>


</body>
</html>