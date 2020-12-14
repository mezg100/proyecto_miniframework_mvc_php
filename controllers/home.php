<?php

//controllers/home.php

require '../fw/fw.php';
require '../views/form_login.php';
require '../views/home.php';
require '../views/resultado.php';


if( count($_POST) > 0){
	if( !isset($_POST['email']))die("error1");
	if( !isset($_POST['password']))die("error2");
	$login = new Login();

	if( $login->iniciar($_POST['email'], $_POST['password'])){
		$vista_home = new home();
		$vista_home->nombre_usuario = $_SESSION['nombre'];
		$vista_home->render();
	}
	else
	{
		$vista_resultado = new resultado();
		$vista_resultado->resultado_mensaje = "Usuario o contraseña no validos.";
		$vista_resultado->titulo_html = "login";
		$vista_resultado->enlace_volver = "home";
		$vista_resultado->render();
	}
}

if( !isset($_SESSION['logueado']) && !count($_POST) > 0 ){
	$vista = new form_login();
	$vista->render();
}

if( isset($_SESSION['logueado']) && !count($_POST) > 0 ){
	$vista_home = new home();
	$vista_home->nombre_usuario = $_SESSION['nombre'];
	$vista_home->render();
}



?>