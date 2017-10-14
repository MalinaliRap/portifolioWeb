<?php

	include('config.php');
	include('componentes/head.php');
	include('componentes/header.php');

	include($arrRotas[$pagina]);
	
	include('componentes/footer.php');
?>	