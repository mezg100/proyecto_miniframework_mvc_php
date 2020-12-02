
<!DOCTYPE html>

<html lang="es">
	
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/home.css">
	</head>

<body>

		<p class="user">Usuario: <?=$this->nombre_usuario?></p>

		<table class="table table-hover table-dark table-bordered " >
			<tr class="bg-danger">
				<th><a href="listado-categorias" class="btn btn-danger">Categorias</a></th>
				<th><a href="alta-producto" class="btn btn-danger">Alta producto</a></th>
				<th><a href="ingreso-stock" class="btn btn-danger">Ingreso stock</a></th>
				<th><a href="buscador" class="btn btn-danger">Buscador</a></th>
				<th><a href="logout" class="btn btn-danger">cerrar sesion</a></th>
			</tr>
		</table>


 
</body>
</html>