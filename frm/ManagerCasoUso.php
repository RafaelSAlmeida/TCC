<?php
include '../bd/BdCasoUso.php';

if(@$_POST['gravar']){
	$metodo = new ManagerCasoUso();
	$metodo->gravar($_POST);
}else if(@$_POST['editar']){
	$metodo = new ManagerCasoUso();
	$metodo->editar($_POST);
}else if(@$_POST['excluir']){
	$metodo = new ManagerCasoUso();
	$metodo->excluir($_POST);
}

class ManagerCasoUso {
	function gravar($dados){
		$casoUso = new BdCasoUso();
		if($dados['nome'] == ''){
			echo '<script>alert("Preencha o campo nome");
					window.history.back();</script>';
		}else{
			$retorno = $casoUso->gravar($dados);
			echo $retorno;
		}
	}
	
	function editar($dados){
		$casoUso = new BdCasoUso();
		if($dados['nome'] == ''){
			echo '<script>alert("Preencha o campo nome");
					window.history.back();</script>';
		}else{
			$retorno = $casoUso->editar($dados);
			echo $retorno;
		}
	}
	
	function excluir($dados){
		$casoUso = new BdCasoUso();
		$retorno = $casoUso->excluir($dados);
		echo $retorno;
	}
}
?>