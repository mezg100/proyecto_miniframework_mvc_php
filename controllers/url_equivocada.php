<?php
  //Controller/url_equivocada.php

  require '../fw/fw.php';
  require '../views/error_url.php';

$vista = new error_url();
$vista->mensaje="URL equivocada";
$vista->render();


  ?>