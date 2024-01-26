<?php
	session_start();

	$autoload = function($class){
		include('classes/'.$class.'.php');
	};

	spl_autoload_register($autoload);
	define('INCLUDE_PATH','http://localhost/Curso/Curso_Web_Developer/modulo8/Projeto01/');
	define('INCLUDE_PATH_PAINEL',INCLUDE_PATH.'painel/');

	//Conectar com banco de dados
	define('HOST','localhost');
	define('USER','root');
	define('PASSWORD','');
	define('DATABASE','projeto_01');
?>