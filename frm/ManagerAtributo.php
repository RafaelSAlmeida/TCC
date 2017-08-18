<?php
include '../bd/BdAtributo.php';

if(@$_POST['gravar']){
	$metodo = new ManagerAtributo();
	$metodo->gravar($_POST);
}else if(@$_POST['editar']){
	$metodo = new ManagerAtributo();
	$metodo->editar($_POST);
}else if(@$_POST['excluir']){
	$metodo = new ManagerAtributo();
	$metodo->excluir($_POST);
}

class ManagerAtributo {
	function gravar($dados){
		$atributo = new BdAtributo();
		if($dados['nome'] == ''){
			echo '<script>alert("Preencha o campo nome");
					window.history.back();</script>';
		}if($dados['alias'] == ''){
			echo '<script>alert("Preencha o campo Alias");
					window.history.back();</script>';
		}else{
			$retorno = $atributo->gravar($dados);
			echo $retorno;
		}
	}
	
	function editar($dados){
		$atributo = new BdAtributo();
		if($dados['nome'] == ''){
			echo '<script>alert("Preencha o campo nome");
					window.history.back();</script>';
		}else{
			$retorno = $atributo->editar($dados);
			echo $retorno;
		}
	}
	
	function excluir($dados){
		$atributo = new BdAtributo();
		$retorno = $atributo->excluir($dados);
		echo $retorno;
	}
	
	function listar(){
		$atributo = new BdAtributo();
		$retorno = $atributo->listar();
		return $retorno;
	}
}
?>