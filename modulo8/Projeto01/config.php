<?php
	session_start();
	date_default_timezone_set('America/Sao_Paulo');

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

	//funções 

    // function pegaCargo($cargo){
	// 	$arr = [
	// 		'0' => 'Normal',
	// 		'1' => 'Administrador',
	// 		'2' => 'Sub Administrador'
	// 	];
	// 	return $arr[$cargo];
		
	// }

	//Constante painel de controle
	define('NOME_EMPRESA', 'Teteu Dev');

	function confereCargos($cargo){
		$conn = new mysqli(HOST, USER, PASSWORD, DATABASE);
		
		if ($conn->connect_error) {
            die("Falha na conexão com o banco de dados: ");
        }

		$sql = "SELECT c.nome_cargo FROM `tb_admin.usuarios` u INNER JOIN cargos c ON u.cargo = c.idcargo WHERE u.id = $cargo";
		
		$result = $conn->query($sql);


		if ($result->num_rows > 0) {
			// Exibir o cargo do usuário
			while($row = $result->fetch_assoc()) {
				return  $row["nome_cargo"];
			}
		} else {
			return  "Cargo não encontrado";
		}
		$conn->close();
	}

?>