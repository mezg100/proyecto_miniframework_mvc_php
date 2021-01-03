<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/tabla_productos.css">
    <script defer type="text/javascript" src="js/buscador.js"></script>
    <script defer type="text/javascript" src="js/eliminar.js"></script>
    <title>Buscador</title>
</head>
<body>
	
<p id="mensaje"></p>
<?php if(isset($_POST['busqueda'])){?>

   <?php if($this->productos){?>

	<h1 class="h1 text-center bg-success">Resultados de la Busqueda</h1>
	
	<form action="" method="POST" id="buscador-results" >

		<input type="text" name="busqueda" id="busqueda-results" placeholder="Realizar otra Busqueda.." class="form-control barra">
		<input type="submit" value="buscar" class="btn btn-success submit">
   </form>

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
		 <a href="buscador" class="btn btn-info volver">Ver Listado Completo</a>
			 <?php }else{ ?>

               <h1 class="h1 bg-danger">Sin Resultados</h1>
			   
			   
		<form action="" method="POST" id="buscador-no-results">

           <input type="text" name="busqueda" id="busqueda-no-results"placeholder="Buscar de nuevo.." class="form-control barra">
           <input type="submit" value="buscar" class="btn btn-success submit">
         </form>

		 <a href="buscador" class="btn btn-info volver">Ver Listado Completo</a>

<?php } 

   }else{ ?>


<?php if(!isset($_POST['busqueda'])){?>

	<form action="" method="POST" id="form-buscador" >
		<input type="text" name="busqueda" id="busqueda" placeholder="ingrese su busqueda.." class="form-control barra">
		<input type="submit" value="buscar" class="btn btn-success submit">
	
	</form>

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
			    <a href="home" class=" btn btn-danger ">Volver</a>
		<?php } ?>

</body>
	<?php } ?>		 
</html>