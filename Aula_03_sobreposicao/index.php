<?php

	$pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');

	$id = 1;
	//OR funciona como 'ou'
	//AND funciona como 'e'



	$sql = $pdo->prepare("UPDATE `clientes` SET nome='Pero',sobrenome='Loko' WHERE id=$id OR nome='Matheus'");

	if($sql->execute()){
		echo 'Meu cliente foi atualizado com sucesso!';
	}

?>