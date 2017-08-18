<?php
include_once 'Conexao.php';

class BdMatriz{
	function listar(){
		$con = new Conexao();
		$sql = " SELECT c.nome, ce.idcenario, ce.descricao
					from casouso c
					inner join cenario ce on ce.idcasoUso = c.id ";
		$con->execute_query($sql);
		$resultado = mysql_num_rows($con->resultado);
		if($resultado > 0){
			while ($row = mysql_fetch_object($con->resultado)){
				$retorno[] = (object)$row;
			}
			$sql = " SELECT c.idcenario,r.nome,r.id FROM rnf r
						INNER JOIN atributos a ON a.idRNF = r.id
						INNER JOIN cenario_fluxo_atributo cfa ON cfa.idatributo = a.id
                        INNER JOIN cenario_fluxo cf ON cf.id_cenario_fluxo = cfa.id_cenario_fluxo
						INNER JOIN cenario c ON c.idcenario = cf.idcenario
						GROUP BY c.idcenario,r.id ";
			$con->execute_query($sql);
			while ($row = mysql_fetch_object($con->resultado)){
				$retorno['rnf'][] = (object)$row;
			}
			return $retorno;
		}else{
			return false;
		}
	}
	
	function gerarMatriz($dados){
		$con = new Conexao();
		$idcenario = $dados['idcenario'];
		$idrnf = $dados['idrnf'];
		$sql = " SELECT cas.nome as nomecasouso,r.nome as rnf,a.id as idatr, a.alias, cf.idfluxo, cf.nrPasso FROM rnf r
						INNER JOIN atributos a ON a.idRNF = r.id
						INNER JOIN cenario_fluxo_atributo cfa ON cfa.idatributo = a.id
						INNER JOIN cenario_fluxo cf ON cf.id_cenario_fluxo = cfa.id_cenario_fluxo
                        INNER JOIN cenario c ON c.idcenario = cf.idcenario
						INNER JOIN casouso cas ON cas.id = c.idcasoUso
						WHERE c.idcenario = '$idcenario' AND r.id = '$idrnf' 
						ORDER BY cf.idfluxo ";
		$con->execute_query($sql);
		$resultado = mysql_num_rows($con->resultado);
		if($resultado > 0){
			while ($row = mysql_fetch_object($con->resultado)){
				$retorno['dados'][] = (object)$row;
			}
			
			$sql = " SELECT c.idcenario, cf.idfluxo, cf.nrPasso
						FROM cenario c
						INNER JOIN cenario_fluxo cf ON cf.idcenario = c.idcenario
						INNER JOIN fluxo f ON f.id = cf.idfluxo
						WHERE c.idcenario = '$idcenario'
						ORDER BY f.prioridade,cf.nrPasso ";
			$con->execute_query($sql);
			while ($row = mysql_fetch_object($con->resultado)){
				$retorno['passos'][] = (object)$row;
			}
			
			$sql = " SELECT a.id,a.alias FROM atributos a WHERE a.idRNF = '$idrnf' ORDER BY a.id ";
			$con->execute_query($sql);
			while ($row = mysql_fetch_object($con->resultado)){
				$retorno['atributo'][] = (object)$row;
			}
			
			return $retorno;
		}else{
			return false;
		}
	}
}