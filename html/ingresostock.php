<!DOCTYPE html>

<html lang="es">
	<head>
		<title>Ingreso Stock </title>
		<meta charset="utf-8" />	
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">	
		<link rel="stylesheet" href="css/ingreso-stock.css">
		<link href="https://fonts.googleapis.com/css2?family=Lalezar&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
	</head>

<body>

	<?php if( !isset($_POST['categoria_id']) &&  !isset($_POST['producto_id']) ){
		 	 if( $this->categorias ){ ?>
				<form action="" method="post" class="formulario2">
					<label for="categoria" class="form-label2">Categoria</label>
					<select name="categoria_id" id="categoria" class="form-control form-control2 ">
						<?php foreach($this->categorias as $categoria ){ ?>
							<option value="<?= $categoria['categoria_id'] ?>"> <?= $categoria['nombre'] ?> </option>
						<?php } ?> 
					</select>
					<input type="submit" value="aceptar" class="btn btn-primary boton2">
				</form>
		<?php }
			  else{ ?> <p class="bg-danger text-white error border-bottom"> No existen categorias disponibles </p> <?php }
		
		   }?>

	<?php if( isset($_POST['categoria_id']) && !isset($_POST['producto_id']) ){ 

			if( $this->productos ){ ?>
				<p class="h1 text-center text-white  titulo border-bottom">Seleccione un producto de la categoria <?= $this->categoria_selec['nombre'] ?> e ingrese la cantidad </p>
				<form action="" method="post" class="formulario" >
					<label for="producto" class="form-label">Producto</label>
					<select name="producto_id" id="producto" class="form-control ">
						<?php foreach($this->productos as $producto ){ ?>
							<option value="<?= $producto['producto_id'] ?>"> <?=$producto['nombre']?>
							 --Codigo: <?=$producto['producto_id'] ?> --Stock <?=$producto['stock']?>
							</option>
						<?php } ?> 
					</select>
					<br/>
					<label for="cantidad" class="form-label">Cantidad</label>
					<input type="text" name="cantidad" id="cantidad" class=" form-control form-cantidad" />
					<br/>
					<input type="submit" value="Aceptar" class="btn  btn-primary" >
				</form>
	<?php   }
			else
			{ ?>
			 <p class="bg-danger text-white error border-bottom" > No existen productos disponibles para la categoria <?=$this->categoria_selec['nombre']?> </p>
   <?php 	}
		
		  }?>


<!--	<a href="listado-categorias" class="float-right btn btn-danger btn-volver">Volver</a> -->



</body>
</html>