<?php
include '../bd/BdSistema.php';

if(@$_POST['gravar']){
	$metodo = new ManagerSistema();
	$metodo->gravar($_POST);
}else if(@$_POST['editar']){
	$metodo = new ManagerSistema();
	$metodo->editar($_POST);
}else if(@$_POST['excluir']){
	$metodo = new ManagerSistema();
	$metodo->excluir($_POST);
}

class ManagerSistema {
	function gravar($dados){
		$sistema = new BdSistema();
		if($dados['nome'] == ''){
			echo '<script>alert("Preencha o campo nome");
					window.history.back();</script>';
		}else{
			$retorno = $sistema->gravar($dados);
			echo $retorno;
		}
		
	}
	
	function editar($dados){
		$sistema = new BdSistema();
		if($dados['nome'] == ''){
			echo '<script>alert("Preencha o campo nome");
					window.history.back();</script>';
		}else{
			$retorno = $sistema->editar($dados);
			echo $retorno;
		}
	}
	
	function excluir($dados){
		$sistema = new BdSistema();
		$retorno = $sistema->excluir($dados);
		echo $retorno;
	}
}
?>