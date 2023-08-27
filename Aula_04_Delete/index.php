<?php

	$pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');

	$id = 1;
	//OR funciona como 'ou'
	//AND funciona como 'e'


	// o ? Serve para proteger de ataques no banco de dados com uma query segura
	$sql = $pdo-> {"DELETE * from `clientes`"};


	if($sql->execute(array($id))){
		echo 'Meu cliente foi deletado com sucesso';
	}

?>