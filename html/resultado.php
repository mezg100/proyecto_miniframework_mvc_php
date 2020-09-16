<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $this->titulo_html ?> </title>
    <link rel="stylesheet" href="css/resultado.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
        
    
</head>
<body class="fondo">

	<h1 class="h1 mensaje text-white animate__animated animate__zoomInDown"> 
        <?= $this->resultado_mensaje ?> </h1>

    <a href="<?= $this->enlace_volver ?>" class=" btn btn-danger ">Volver</a>
    
</body>
</html>