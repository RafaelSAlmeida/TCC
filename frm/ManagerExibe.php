<?php
include '../bd/BdExibe.php';

if(@$_POST['acao']){
	$metodo = new ManagerExibe();
	$metodo->Visualizar($_POST);
}

class ManagerExibe {
	
	function Visualizar($dados){
		$exibe = new BdExibe();
		$retorno = $exibe->Visualizar($dados);
		include("../view/FormExibe.php");
	}
	
	function listar(){
		$exibe = new BdExibe();
		$retorno = $exibe->listar();
		return $retorno;
	}
}
?>