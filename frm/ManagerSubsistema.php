<?php
include '../bd/BdSubsistema.php';

if(@$_POST['gravar']){
	$metodo = new ManagerSubsistema();
	$metodo->gravar($_POST);
}else if(@$_POST['editar']){
	$metodo = new ManagerSubsistema();
	$metodo->editar($_POST);
}else if(@$_POST['excluir']){
	$metodo = new ManagerSubsistema();
	$metodo->excluir($_POST);
}

class ManagerSubsistema {
	function gravar($dados){
		$subsistema = new BdSubsistema();
		if($dados['nome'] == ''){
			echo '<script>alert("Preencha o campo nome");
					window.history.back();</script>';
		}else{
			$retorno = $subsistema->gravar($dados);
			echo $retorno;
		}
	}
	
	function editar($dados){
		$subsistema = new BdSubsistema();
		if($dados['nome'] == ''){
			echo '<script>alert("Preencha o campo nome");
					window.history.back();</script>';
		}else{
			$retorno = $subsistema->editar($dados);
			echo $retorno;
		}
	}
	
	function excluir($dados){
		$subsistema = new BdSubsistema();
		$retorno = $subsistema->excluir($dados);
		echo $retorno;
	}
}
?>