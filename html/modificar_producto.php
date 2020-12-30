<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Producto</title>
	<link rel="stylesheet" href="css/modificar_producto.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script type="text/javascript" src="js/modificar_producto.js"></script>
</head>
<body>


<h1 class="bg-warning">Modificar Producto</h1>
<p id="mensaje"></p>

<form action="" method="POST" class="main-form" id="form">

	 <div class="from-group">
	 <label for="producto" class="form-label">NOMBRE</label>
	 <input type="text" name="nombre" id="producto" value="<?=$this->datos_producto['nombre']?>" class="text-center form-control">
	 </div>

	<div class="form-group">
	<label for="precio" class="form-label">PRECIO</label>
	<input type="text"  name="precio" id="precio" value="<?=$this->datos_producto['precio']?>" class="form-control text-center">
	</div>
     <input type="hidden" name="id" value="<?=$this->datos_producto['producto_id']?>" />
	 <input type="submit" value="Modificar Producto" class=" btn btn-warning btn-block btn-submit p-2" />
	 
</form>

	    <a href="home" class=" btn btn-danger ">Volver</a>
    
</body>
</html>