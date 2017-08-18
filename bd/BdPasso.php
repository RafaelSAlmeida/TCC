<?php
include_once 'Conexao.php';

class BdPasso{
	function vincular($dados){
		$con = new Conexao();
		
		foreach($_POST['idatr2'] AS $valor){
			$sql = " INSERT INTO passotemp (idpasso,idatributo) VALUES ('".$dados['fluxo'].$dados['passo']."','$valor') ";
			$con->execute_query($sql);
		}
		
		
		return true;
	}
}