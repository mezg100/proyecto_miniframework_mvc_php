<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta Producto</title>
    <link rel="stylesheet" href="css/insertar-producto.css">
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script defer type="text/javascript" src="js/altaproducto.js"></script>
</head>
<body>

<h1 class="bg-primary">Alta Producto</h1>

<form action="" method="POST" class="main-form" id="form-alta" >
	 <label id="mensaje"></label>
	 <label for="categorias" class="label">CATEGORIA</label>
	 <select name="categoria" id="categorias" class="main-select input-form">
	 <?php foreach($this->categorias as $cat) {?>
	 <option value="<?=$cat['categoria_id']?>">
	 <?=$cat['nombre']?>
	 </option>
	 <?php } ?>
	 </select>
	 <label for="producto_id" class="label">CODIGO PRODUCTO</label>
	 <input type="text" name="producto_id" id="producto_id" class="form-input-cod input-form ">
	
	 <label for="producto" class="label">NOMBRE</label>
	 <input type="text" name="nombre" id="nombre" class="form-input-producto input-form">
	
	<label for="precio" class="label">PRECIO</label>
	<input type="text"  name="precio" id="precio" class="form-input-precio input-form">
	
	 <input type="submit" value="Agregar Producto" class="btn-submit bg-info" />

</form>

    	 <a href="home" class=" btn btn-danger btn-volver ">Volver</a>
</body>
</html>