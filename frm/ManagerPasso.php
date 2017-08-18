<?php
include '../bd/BdPasso.php';

if(@$_POST['vincular']){
	$metodo = new ManagerPasso();
	$metodo->vincular($_POST);
}

class ManagerPasso {
	function vincular($dados){
		$passo = new BdPasso();
		$retorno = $passo->vincular($dados);
		if(retorno)
		echo '<script>alert("Vinculado com Sucesso");
					window.history.go(-2);</script>';
	}
}
?>