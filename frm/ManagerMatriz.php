<?php
include '../bd/BdMatriz.php';

if(@$_POST['visualizar']){
	$metodo = new ManagerMatriz();
	$metodo->gerarMatriz($_POST);
}

class ManagerMatriz {
	function listar($dados){
		$matriz = new BdMatriz();
		$retorno = $matriz->listar();
		echo $retorno;
	}
	
	function gerarMatriz($dados){
		$matriz = new BdMatriz();
		$retorno = $matriz->gerarMatriz($dados);
		include("../view/FormMatriz.php");
	}
}
?>