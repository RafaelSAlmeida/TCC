<?php
include '../bd/BdMatrizAux.php';

if(@$_POST['acao'] == 'sistema'){
	$metodo = new ManagerMatrizAux();
	$metodo->EspalhaSistema($_POST);
}
if(@$_POST['acao'] == 'subsistema'){
	$metodo = new ManagerMatrizAux();
	$metodo->EspalhaSubsistema($_POST);
}
if(@$_POST['acao'] == 'casoUso'){
	$metodo = new ManagerMatrizAux();
	$metodo->EspalhaCasoUso($_POST);
}

class ManagerMatrizAux {
	
	function EspalhaSistema($dados){
		$matriz = new BdMatrizAux();
		$retorno = $matriz->EspalhaSistema($dados);
		include("../view/FormMatrizAux.php");
	}
	
	function EspalhaSubsistema($dados){
		$matriz = new BdMatrizAux();
		$retorno = $matriz->EspalhaSubsistema($dados);
		include("../view/FormMatrizAux.php");
	}
	
	function EspalhaCasoUso($dados){
		$matriz = new BdMatrizAux();
		$retorno = $matriz->EspalhaCasoUso($dados);
		
		include("../view/FormMatrizAux.php");
	}
}
?>