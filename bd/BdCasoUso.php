<?php
include_once 'Conexao.php';

class BdCasoUso{
	function gravar($dados){
		$con = new Conexao();
		$nome = $dados['nome'];
		$idsistema = $dados['idsistema'];
		$idsubsistema = $dados['idsubsistema'];
		$sql = "INSERT INTO casouso (nome) VALUES ('$nome')";
		$con->execute_query($sql);
		if($con->resultado){
			$sql = " SELECT * FROM casouso WHERE nome LIKE '%$nome%' ORDER BY id DESC LIMIT 1  ";
			$con->execute_query($sql);
			$row = mysql_fetch_object($con->resultado);
			$sql = " INSERT INTO subsistemacasouso (idsistema,idsubsistema,idcasoUso) VALUES ('$idsistema', '$idsubsistema', '$row->id') ";
			$con->execute_query($sql);
			if($con->resultado){
				$retorno = '<script>alert("Gravado com Sucesso");
						location.href="../view/Principal.php"</script>';
				return $retorno;
			}
		}else{
			$retorno = mysql_error();
			return $retorno;
		}
	}
	
	function listarSistema(){
		$con = new Conexao();
		$sql = " SELECT * FROM sistema ";
		$con->execute_query($sql);
		$resultado = mysql_num_rows($con->resultado);
		if($resultado > 0){
			while ($row = mysql_fetch_object($con->resultado)){
				$retorno['sistema'][] = (object)$row;
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
				$retorno = false;
				return $retorno;
			}
		}else{
			$retorno = false;
			return $retorno;
		}
		
	}
	
	function listar(){
		$con = new Conexao();
		$sql = " SELECT s.id AS idsistema,s.nome AS nomesis,sub.id AS idsubsistema,
					sub.nome AS nomesub,cas.id AS idcasoUso, cas.nome AS nomecasoUso 
					FROM sistema s
					INNER JOIN subsistema sub ON sub.idsistema = s.id
					INNER JOIN subsistemacasouso subsis ON subsis.idsistema = s.id AND subsis.idsubsistema = sub.id
					INNER JOIN casouso cas ON cas.id = subsis.idcasoUso ";
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
		/*
		$sql = " SELECT * FROM subsistema ";
		$con->execute_query($sql);
		$resultado = mysql_num_rows($con->resultado);
		if($resultado > 0){
			while ($row = mysql_fetch_object($con->resultado)){
				$retorno['subsistema'][] = (object)$row;
			}
		}else{
			$retorno['subsistema'] = false;
			return $retorno;
		}
		
		$sql = " SELECT * FROM casoUso ";
		$con->execute_query($sql);
		$resultado = mysql_num_rows($con->resultado);
		if($resultado > 0){
			while ($row = mysql_fetch_object($con->resultado)){
				$retorno['casoUso'][] = (object)$row;
			}
			return $retorno;
		}else{
			$retorno['casoUso'] = false;
			return $retorno;
		}*/
	}
	
	function editar($dados){
		$con = new Conexao();
		$nome = $dados['nome'];
		$id = $dados['id'];
		$idsistema = $dados['idsistema'];
		$idsubsistema = $dados['idsubsistema'];
		$sql = " UPDATE subsistemacasouso SET idsistema = '$idsistema',idsubsistema = '$idsubsistema',idcasoUso = '$id' WHERE idcasoUso = '$id' ";
		
		$con->execute_query($sql);
		if($con->resultado){
			$sql = " UPDATE casouso SET nome = '$nome' WHERE id = '$id' ";
			$con->execute_query($sql);
			if($con->resultado){
				$retorno = '<script>alert("Atualizado com Sucesso");
						location.href="../view/Principal.php"</script>';
				return $retorno;
			}else{
				$retorno = mysql_error();
				return $retorno;
			}
		}else{
			$retorno = mysql_error();
			return $retorno;
		}
	}
	
	function excluir($dados){
		$con = new Conexao();
		$id = $dados['id'];
		$sql = " DELETE FROM casouso WHERE id = '$id' ";
		$con->execute_query($sql);
		if($con->resultado){
			$sql = " DELETE FROM subsistemacasouso WHERE idcasoUso = '$id' ";
			$con->execute_query($sql);
			if($con->resultado){
				$retorno = '<script>alert("Excluído com Sucesso");
						location.href="../view/Principal.php"</script>';
				return $retorno;
			}
		}else{
			$retorno = mysql_error();
			return $retorno;
		}
	}
}