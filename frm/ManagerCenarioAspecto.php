<?php
include '../bd/BdCenarioAspecto.php';

if(@$_POST['acao']){
	$metodo = new ManagerCenarioAspecto();
	$metodo->gerarCenarioAspecto($_POST);
}

class ManagerCenarioAspecto {
	
	function gerarCenarioAspecto($dados){
		$cenario = new BdCenarioAspecto();
		$retorno = $cenario->gerarCenarioAspecto($dados);
		include("../view/FormCenarioAspecto.php");
	}
}
?>