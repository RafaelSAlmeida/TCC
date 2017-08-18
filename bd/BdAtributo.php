<?php
include_once 'Conexao.php';

class BdAtributo{
	function gravar($dados){
		$con = new Conexao();
		$nome = $dados['nome'];
		$idRNF = $dados['idRNF'];
		$alias = $dados['alias'];
		$sql = "INSERT INTO atributos (idRNF,nome,alias) VALUES ('$idRNF','$nome', '$alias')";
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
		$sql = "SELECT * FROM rnf";
		$con->execute_query($sql);
		$resultado = mysql_num_rows($con->resultado);
		if($resultado > 0){
			while ($row = mysql_fetch_object($con->resultado)){
				$retorno['rnf'][] = (object)$row;
			}
		}else{
			$retorno['rnf'] = false;
			return $retorno;
		}			
		
		$sql = " SELECT * FROM atributos ";
		$con->execute_query($sql);
		$resultado = mysql_num_rows($con->resultado);
		if($resultado > 0){
			while ($row = mysql_fetch_object($con->resultado)){
				$retorno['atributos'][] = (object)$row;
			}
			return $retorno;
		}else{
			$retorno['atributos'] = false;
			return $retorno;
		}
	}
	
	function editar($dados){
		$con = new Conexao();
		$nome = $dados['nome'];
		$id = $dados['id'];
		$idrnf = $dados['idRNF'];
		$sql = " UPDATE atributos SET idRNF = '$idrnf',nome = '$nome' WHERE id = '$id' ";
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
		$sql = " DELETE FROM atributos WHERE id = '$id' ";
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