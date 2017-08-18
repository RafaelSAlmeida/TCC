<?php
include_once 'Conexao.php';

class BdFluxo{
	function gravar($dados){
		$con = new Conexao();
		$nome = $dados['nome'];
		$descricao = $dados['descricao'];
		$sql = "INSERT INTO fluxo (id,descricao) VALUES ('$nome','$descricao')";
		$con->execute_query($sql);
		
		if($con->resultado){
			$retorno = '<script>alert("Gravado com Sucesso");
					location.href="../view/Principal.php"</script>';
			return $retorno;
		}else{
			$retorno = mysql_error();
			return $retorno;
		}
	}
	
	function listar(){
		$con = new Conexao();
		$retorno = array();
		$sql = "SELECT * FROM fluxo";
		$con->execute_query($sql);
		$resultado = mysql_num_rows($con->resultado);
		if($resultado > 0){
			while ($row = mysql_fetch_object($con->resultado)){
				$retorno[] = (object)$row;
			}
			return $retorno;
		}else{
			return false;
		}
	}
	
	function editar($dados){
		$con = new Conexao();
		$descricao = $dados['descricao'];
		$id = $dados['idfluxo'];
		$idAntigo = $dados['idfluxo1'];
		$sql = "UPDATE fluxo SET id = '$id', descricao = '$descricao' WHERE id = '$idAntigo' ";
		$con->execute_query($sql);
	
		if($con->resultado){
			$retorno = '<script>alert("Editado com Sucesso");
					location.href="../view/Principal.php"</script>';
			return $retorno;
		}else{
			$retorno = mysql_error();
			return $retorno;
		}
	}
	
	function excluir($dados){
		$con = new Conexao();
		$id = $dados['idfluxo'];
		/*$sql = " DELETE FROM atributos WHERE idRNF = '$id' ";
		$con->execute_query($sql);*/
		$sql = "DELETE FROM fluxo WHERE id = '$id' ";
		$con->execute_query($sql);
	
		if($con->resultado){
			$retorno = '<script>alert("Excluído com Sucesso");
					location.href="../view/Principal.php"</script>';
			return $retorno;
		}else{
			$retorno = mysql_error();
			return $retorno;
		}
	}
}