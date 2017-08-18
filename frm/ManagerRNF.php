<?php

include '../bd/BdRNF.php';

if(@$_POST['gravar']){
	$metodo = new ManagerRNF();
	$metodo->gravar($_POST);
}else if(@$_POST['editar']){
	$metodo = new ManagerRNF();
	$metodo->editar($_POST);
}else if(@$_POST['excluir']){
	$metodo = new ManagerRNF();
	$metodo->excluir($_POST);
}

class ManagerRNF {
	function gravar($dados){
		$rnf = new BdRNF();
		if($dados['nome'] == ''){
			echo '<script>alert("Preencha o campo nome");
					window.history.back();</script>';
		}else{
			$retorno = $rnf->gravar($dados);
			echo $retorno;
		}
	}
	
	function editar($dados){
		$rnf = new BdRNF();
		if($dados['nome'] == ''){
			echo '<script>alert("Preencha o campo nome");
					window.history.back();</script>';
		}else{
			$retorno = $rnf->editar($dados);
			echo $retorno;
		}
	}
	
	function excluir($dados){
		$rnf = new BdRNF();
		$retorno = $rnf->excluir($dados);
		echo $retorno;
	}
}
?>