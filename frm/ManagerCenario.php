<?php
include '../bd/BdCenario.php';

if(@$_POST['gravar']){
	$metodo = new ManagerCenario();
	$metodo->gravar($_POST);
}else if(@$_POST['editar']){
	$metodo = new ManagerCenario();
	$metodo->editar($_POST);
}else if(@$_POST['excluir']){
	$metodo = new ManagerCenario();
	$metodo->excluir($_POST);
}

class ManagerCenario {
	function gravar($dados){
		$cenario = new BdCenario();
		if(is_null($dados['idsistema'])){
			echo '<script>alert("Selecione o Sistema!");
					location.href="../view/FormCenario.php";</script>';
		}
		if(is_null($dados['idsubsistema'])){
			echo '<script>alert("Selecione o Subsistema!");
					location.href="../view/FormCenario.php";</script>';
		}
		if(is_null($dados['idcasoUso'])){
			echo '<script>alert("Selecione o Caso de Uso!");
					location.href="../view/FormCenario.php";</script>';
		}
		if(is_null($dados['descricao'])){
			echo '<script>alert("Preencha a Descrição!");
					location.href="../view/FormCenario.php";</script>';
		}else{
			$retorno = $cenario->gravar($dados);
		}
		echo $retorno;
	}
	
	function editar($dados){
		$cenario = new BdCenario();
		$retorno = $cenario->editar($dados);
		echo $retorno;
	}
	
	function excluir($dados){
		$cenario = new BdCenario();
		$retorno = $cenario->excluir($dados);
		echo $retorno;
	}
}
?>