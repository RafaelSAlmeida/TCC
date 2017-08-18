<?php

include '../bd/BdFluxo.php';

if(@$_POST['gravar']){
	$metodo = new ManagerFluxo();
	$metodo->gravar($_POST);
}else if(@$_POST['editar']){
	$metodo = new ManagerFluxo();
	$metodo->editar($_POST);
}else if(@$_POST['excluir']){
	$metodo = new ManagerFluxo();
	$metodo->excluir($_POST);
}

class ManagerFluxo {
	function gravar($dados){
		$fluxo = new BdFluxo();
		if($dados['nome'] == ''){
			echo '<script>alert("Preencha o campo nome");
					window.history.back();</script>';
		}if($dados['descricao'] == ''){
			echo '<script>alert("Preencha a descrição");
					window.history.back();</script>';
		}else{
			$retorno = $fluxo->gravar($dados);
			echo $retorno;
		}
	}
	
	function editar($dados){
		$fluxo = new BdFluxo();
		if($dados['idfluxo'] == ''){
			echo '<script>alert("Preencha o campo nome");
					window.history.back();</script>';
		}if($dados['descricao'] == ''){
			echo '<script>alert("Preencha a descrição");
					window.history.back();</script>';
		}else{
			$retorno = $fluxo->editar($dados);
			echo $retorno;
		}
	}
	
	function excluir($dados){
		$fluxo = new BdFluxo();
		$retorno = $fluxo->excluir($dados);
		echo $retorno;
	}
}
?>