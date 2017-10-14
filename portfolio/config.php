<?php

	/*processa a url para descobrir a página */
	$url = $_SERVER['REQUEST_URI'];
	
	$url_partes = explode('/', $url);
	
	array_shift($url_partes);
	
	while($url_partes[0]=='turma_sabado' || $url_partes[0]=='portfolio'){
		array_shift($url_partes);
	}
	
	$pagina = isset($url_partes[0]) ? $url_partes[0] :'';
	/* fim processamento da url */

	/* pra onde o link vai (roteamento) */
	$arrRotas = array(
		'home'=>'views/home.php',
		''=>'views/home.php'
	);

?>










