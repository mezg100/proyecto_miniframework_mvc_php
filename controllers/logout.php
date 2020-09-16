<?php

//controllers/logout.php

require '../fw/fw.php';

	unset($_SESSION['logueado']);
	header("Location: home");
	exit;

?>