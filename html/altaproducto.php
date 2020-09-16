<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta Producto</title>
    <link rel="stylesheet" href="css/insertar-producto.css">
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

<h1 class="bg-primary">Alta Producto</h1>

<form action="" method="POST" class="main-form">

	 
	 <label for="categorias" class="label">CATEGORIA</label>
	 <select name="categoria" id="categorias" class="main-select">
	 <?php foreach($this->categorias as $cat) {?>
	 <option value="<?=$cat['categoria_id']?>">
	 <?=$cat['nombre']?>
	 </option>
	 <?php } ?>
	 </select>
	 <label for="producto_id" class="label">CODIGO PRODUCTO</label>
	 <input type="text" name="producto_id" id="producto_id" class="form-input-cod ">
	
	 <label for="producto" class="label">NOMBRE</label>
	 <input type="text" name="nombre" id="producto" class="form-input-producto">
	
	<label for="precio" class="label">PRECIO</label>
	<input type="text"  name="precio" id="precio" class="form-input-precio">
	
	 <input type="submit" value="Agregar Producto" class="btn-submit bg-info" />

</form>
    
</body>
</html>