<?php
include_once 'Conexao.php';

class BdSubsistema{
	function gravar($dados){
		$con = new Conexao();
		$nome = $dados['nome'];
		$id = $dados['idsistema'];
		$sql = "INSERT INTO subsistema (idsistema,nome) VALUES ('$id','$nome')";
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
		//$retorno = array();
		$sql = "SELECT * FROM sistema";
		$con->execute_query($sql);
		$resultado = mysql_num_rows($con->resultado);
		if($resultado > 0){
			while ($row = mysql_fetch_object($con->resultado)){
				$retorno['sistema'][] = (object)$row;
			}
		}else{
			$retorno['sistema'] = false;
			return false;
		}			
		
		$sql = " SELECT * FROM subsistema ";
		$con->execute_query($sql);
		$resultado = mysql_num_rows($con->resultado);
		if($resultado > 0){
			while ($row = mysql_fetch_object($con->resultado)){
				$retorno['subsistema'][] = (object)$row;
			}
			return $retorno;
		}else{
			$retorno['subsistema'] = false;
			return $retorno;
		}
		
	}
	
	function editar($dados){
		$con = new Conexao();
		$nome = $dados['nome'];
		$id = $dados['id'];
		$idsistema = $dados['idsistema'];
		$sql = " UPDATE subsistema SET idsistema = '$idsistema',nome = '$nome' WHERE id = '$id' ";
		$con->execute_query($sql);
		if($con->resultado){
			$retorno = '<script>alert("Atualizado com Sucesso");
					location.href="../view/Principal.php"</script>';
			return $retorno;
		}else{
			$retorno = mysql_error();
			return $retorno;
		}
	}
	
	function excluir($dados){
		$con = new Conexao();
		$id = $dados['id'];
		$sql = " DELETE FROM subsistema WHERE id = '$id' ";
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