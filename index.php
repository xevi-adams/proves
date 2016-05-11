<?php

if (isset($_GET['seccio']))
{
  $pagina=strtolower($_GET['seccio']);
}
else
{
  $pagina='principal';
}

require_once('templates/header.php');
require_once('content/' .$pagina. '.php');
require_once('templates/footer.php');

?>