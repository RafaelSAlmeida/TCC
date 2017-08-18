<?php
include_once 'Conexao.php';

class BdRNF{
	function gravar($dados){
		$con = new Conexao();
		$nome = $dados['nome'];
		$sql = "INSERT INTO rnf (nome) VALUES ('$nome')";
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
		$sql = "SELECT * FROM rnf";
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
		$nome = $dados['nome'];
		$id = $dados['idRNF'];
		$sql = "UPDATE rnf SET nome = '$nome' WHERE id = '$id' ";
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
		$id = $dados['idRNF'];
		$sql = " DELETE FROM atributos WHERE idRNF = '$id' ";
		$con->execute_query($sql);
		$sql = "DELETE FROM rnf WHERE id = '$id' ";
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