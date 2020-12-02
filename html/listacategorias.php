<!DOCTYPE html>

<html lang="es">
	<head>
		<title>Listado de categorias</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/lista_categorias.css">
	</head>

<body>

	<?php if( $this->categorias ){ ?>

			<h1 class="bg-primary">Categorias</h1>

	        <ul class="list-group lista ">
			
		<?php  foreach($this->categorias as $categoria){ ?>
				<li class="list-group-item d-flex justify-content-between align-items-center">
					<a href="<?=$this->ruta_productos . $categoria['categoria_id']?>"><?= $categoria['nombre'] ?></a> 
					<span class="badge badge-primary badge-pill"><?=$this->cantidad[$categoria['categoria_id']-1]?></span>
			    </li>
		<?php	} ?>
		
			</ul>

	<?php }
		 else
	      { ?>
	      	<p> No existen categorias disponibles </p>
	<?php } ?>

		 <a href="home" class=" btn btn-danger ">Volver</a>

</body>
</html>