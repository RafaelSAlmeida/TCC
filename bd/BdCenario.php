<?php
include_once 'Conexao.php';

class BdCenario{
	function gravar($dados){
		$con = new Conexao();
		$idsistema = $dados['idsistema'];
		$idsubsistema = $dados['idsubsistema'];
		$idcasoUso = $dados['idcasoUso'];
		$descricao = $dados['descricao'];
		
		$sql = " SELECT * FROM passotemp ";
		$con->execute_query($sql);
		while ($row = mysql_fetch_object($con->resultado)){
			$passotemp[] = (object)$row;
		}
		
		include_once '../bd/BdFluxo.php';
        $fluxo = new BdFluxo();
        $dadFluxo = $fluxo->listar();
		/*foreach($dadFluxo as $fluxo){
			for($i = 1; $i <= $_POST['passo'.$fluxo->id.''];$i++){
				$passo[$fluxo->id][$i] = $_POST['passoDesc'.$fluxo->id.'+'.$i.''];
				$sql = " INSERT INTO passo (posicao,descricao) VALUES ('$i','".$passo[$fluxo->id][$i]."') ";
				$con->execute_query($sql);
				if($con->resultado){
					$sql = " SELECT idpasso FROM passo WHERE posicao = '$i' AND descricao = '".$passo[$fluxo->id][$i]."' LIMIT 1 ";
					$con->execute_query($sql);
					$idpasso = mysql_fetch_object($con->resultado);
					$passo[$fluxo->id][$i] = $idpasso->idpasso;
					
					$sql = " INSERT INTO fluxo_passo (idfluxo,idpasso) VALUES ('$fluxo->id', '".$passo[$fluxo->id][$i]."') ";
					$con->execute_query($sql);
					if($con->resultado){
						
					}else{
						$retorno = mysql_error();
						return $retorno;
					}
					
					if($passotemp){
						foreach ($passotemp as $valor){
							if($valor->idpasso == $fluxo->id.$i){
								$sql = " INSERT INTO passo_atributo (idpasso,idatributo) VALUES ('".$passo[$fluxo->id][$i]."', '".$valor->idatributo."') ";
								
								$con->execute_query($sql);
								if($con->resultado){
									$sql = " DELETE FROM passotemp WHERE idpasso = '".$fluxo->id.$i."' AND idatributo = '$valor->idatributo' ";
									$con->execute_query($sql);
								}else{
									$retorno = mysql_error();
									return $retorno;
								}
							}
						}
					}
				}else{
					$retorno = mysql_error();
					return $retorno;
				}
			}
		}*/
		
		$sql = " INSERT INTO cenario (idcasoUso,descricao) VALUES ('$idcasoUso', '$descricao') ";
		$con->execute_query($sql);
		if($con->resultado){
			$sql = " SELECT idcenario FROM cenario WHERE idcasoUso = '$idcasoUso' AND descricao = '$descricao' ";
			$con->execute_query($sql);
			$idcenario = mysql_fetch_object($con->resultado);
			foreach($dadFluxo as $fluxo){
				for($i = 1; $i <= $_POST['passo'.$fluxo->id.''];$i++){
					$passo[$fluxo->id][$i] = $_POST['passoDesc'.$fluxo->id.'+'.$i.''];
					$sql = " INSERT INTO cenario_fluxo (idcenario,idfluxo,nrPasso,descricao) VALUES ('$idcenario->idcenario', '".$fluxo->id."', '$i', '".$passo[$fluxo->id][$i]."') ";
					$con->execute_query($sql);
				}
				
				if($passotemp){
					foreach ($passotemp as $valor){
						for($i = 1; $i <= $_POST['passo'.$fluxo->id.''];$i++){
							$sql = " SELECT id_cenario_fluxo FROM cenario_fluxo WHERE idcenario = '$idcenario->idcenario' AND idfluxo = '".$fluxo->id."' AND nrPasso = '$i' ";
							$con->execute_query($sql);
							$id_cenario_fluxo = mysql_fetch_object($con->resultado);
							if($valor->idpasso == $fluxo->id.$i){
								$sql = " INSERT INTO cenario_fluxo_atributo (id_cenario_fluxo,idatributo) VALUES ('".$id_cenario_fluxo->id_cenario_fluxo."', '".$valor->idatributo."') ";
								$con->execute_query($sql);
								if($con->resultado){
									$sql = " DELETE FROM passotemp WHERE idpasso = '".$fluxo->id.$i."' AND idatributo = '$valor->idatributo' ";
									$con->execute_query($sql);
								}else{
									$retorno = mysql_error();
									return $retorno;
								}
							}
						}
					}
				}
			}
			
			$retorno = '<script>alert("Gravado com Sucesso");
						location.href="../view/Principal.php"</script>';
			return $retorno;
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
	
	function listar($id = null){
		$con = new Conexao();
		if(is_null($id)){
			$sql = " SELECT c.idcenario AS idcenario,c.descricao AS descricao, s.nome AS nomesis,
						sub.nome AS nomesub,cas.id AS idcasoUso, cas.nome AS nomecasoUso 
						FROM sistema s
						INNER JOIN subsistema sub ON sub.idsistema = s.id
						INNER JOIN subsistemacasouso subsis ON subsis.idsistema = s.id AND subsis.idsubsistema = sub.id
						INNER JOIN casouso cas ON cas.id = subsis.idcasoUso
						INNER JOIN cenario c ON c.idcasoUso = cas.id ";
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
		}else{
			$sql = " SELECT c.idcenario AS idcenario,c.descricao AS descricao, s.nome AS nomesis,
						sub.nome AS nomesub,cas.id AS idcasoUso, cas.nome AS nomecasoUso, 
						cf.idfluxo, cf.nrPasso, cf.descricao as descrPasso
						FROM sistema s
						INNER JOIN subsistema sub ON sub.idsistema = s.id
						INNER JOIN subsistemacasouso subsis ON subsis.idsistema = s.id AND subsis.idsubsistema = sub.id
						INNER JOIN casouso cas ON cas.id = subsis.idcasoUso
						INNER JOIN cenario c ON c.idcasoUso = cas.id
						INNER JOIN cenario_fluxo cf ON cf.idcenario = c.idcenario
						WHERE c.idcenario = '$id'
						ORDER BY nrPasso ";
			$con->execute_query($sql);
			$resultado = mysql_num_rows($con->resultado);
			if($resultado > 0){
				while ($row = mysql_fetch_object($con->resultado)){
					$retorno[] = (object)$row;
				}
				return $retorno;
			}
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
		$idcenario = $dados['idcenario'];
		$descricao = $dados['descricao'];
		$sql = " UPDATE cenario SET descricao = '$descricao' WHERE idcenario = '$idcenario' ";
		
		$con->execute_query($sql);
		
		include_once '../bd/BdFluxo.php';
        $fluxo = new BdFluxo();
        $dadFluxo = $fluxo->listar();
		
		if($con->resultado){
			
			foreach($dadFluxo as $fluxo){
				
				for($i = 1; $i <= $_POST['passo'.$fluxo->id.''];$i++){
					
					$passo[$fluxo->id][$i] = $_POST['passoDesc'.$fluxo->id.'+'.$i.''];
					$sql = " UPDATE cenario_fluxo SET descricao = '".$passo[$fluxo->id][$i]."' WHERE idcenario = '".$idcenario."' AND idfluxo = '".$fluxo->id."' AND nrPasso = '$i' ";
					
					$con->execute_query($sql);
				}
			}
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
		$sql = " DELETE FROM cenario WHERE idcenario = '$id' ";
		$con->execute_query($sql);
		if($con->resultado){
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