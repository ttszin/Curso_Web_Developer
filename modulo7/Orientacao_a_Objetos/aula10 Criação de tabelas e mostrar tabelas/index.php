<?php
	/*
	class Cachorro{
		public function __construct(){
			echo 'classe cachorro';
		}
	}
	
	class Gato{
		public function __construct(){
			echo 'classe gato';
		}
	}
	
	class Animal{
		public static function build(){
			if (class_exist($nomeclasse)){
				return ner $nomeclasse;
			}
			else{
				die('Ops! A classe não existe!');
			}
		}
	}
	
	Animal::build('Cachorro');
	
	*/
	
	//Adicionar/Fechar Carrinho - Carrinho
	//Calcular Frete - Frete
	//Fechar Pedido - Pedido
	
	class Carrinho{
		public function fecharCarrinho(){
			echo 'Carrinho Fechado'
		}
	}
	
	class Frete{
		public function calcularFrete(){
			echo 'Frete calculado'
		}
	}
	
	class Pedido{
		public function fecharPedido(){
			echo 'Pedido Fechado'
		}
	}
	class Loja{
		public function FinalizaCompra(){
			$this->fecharCarrinho();
			$this->calcularFrete();
			$this->fecharPedido();
		}
		
		public function fecharCarrinho(){
			$carrinho = new Carrinho();
			$carrinho->fecharCarrinho
		}
		
		public function calcularFrete(){
			$frete = new Frete();
			$frete->calcularFrete();
		}
		
		public function fecharPedido(){
			$frete = new Pedido();
			$frete->fecharPedido();
		}
	}
	
	$loja  = new Loja();
	$loja->finalizarCompra();
?>