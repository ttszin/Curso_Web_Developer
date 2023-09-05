<?php

	class minhaClasse
	{
		const VALOR = 300;
		public function __construct(){
			echo self::VALOR;
		}
	}

	echo minhaclasse::VALOR;

?>