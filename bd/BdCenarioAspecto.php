<?php
include_once 'Conexao.php';

class BdCenarioAspecto{
		
	function gerarCenarioAspecto($dados){
		$con = new Conexao();
		$idcenario = $dados['idcenario'];
		
		$sql = " SELECT c.idcenario,c.descricao as cenarioDescr, cas.id as idcasoUso, cas.nome as nomecasoUso,
					cf.idfluxo, cf.nrPasso, cf.descricao as passoDescr, r.nome as nomeRNF
					FROM cenario c
					INNER JOIN casouso cas ON cas.id = c.idcasoUso
					INNER JOIN cenario_fluxo cf ON cf.idcenario = c.idcenario
				    INNER JOIN cenario_fluxo_atributo cfa ON cfa.id_cenario_fluxo = cf.id_cenario_fluxo
				    INNER JOIN atributos a ON a.id = cfa.idatributo
				    INNER JOIN rnf r ON r.id = a.idRNF
					WHERE c.idcenario = '$idcenario'
	        		GROUP BY cf.nrPasso ";
		$con->execute_query($sql);
		$resultado = mysql_num_rows($con->resultado);
		while ($row = mysql_fetch_object($con->resultado)){
			$retorno['dados'][] = (object)$row;
		}
		
		$sql = " SELECT *
					FROM fluxo f 
					ORDER BY f.prioridade ";
		$con->execute_query($sql);
		$resultado = mysql_num_rows($con->resultado);
		while ($row = mysql_fetch_object($con->resultado)){
			$retorno['fluxo'][] = (object)$row;
		}
		
		$sql = " SELECT cf.idfluxo, cf.nrPasso, cf.descricao as passoDescr
					FROM cenario c
					INNER JOIN casouso cas ON cas.id = c.idcasoUso
					INNER JOIN cenario_fluxo cf ON cf.idcenario = c.idcenario
					WHERE c.idcenario = '$idcenario'
					GROUP BY cf.descricao
					ORDER BY cf.nrPasso ";
		$con->execute_query($sql);
		$resultado = mysql_num_rows($con->resultado);
		while ($row = mysql_fetch_object($con->resultado)){
			$retorno['passos'][] = (object)$row;
		}
		
		$sql = " SELECT r.nome as nomeRNF
					FROM cenario c
					INNER JOIN casouso cas ON cas.id = c.idcasoUso
					INNER JOIN cenario_fluxo cf ON cf.idcenario = c.idcenario
					INNER JOIN cenario_fluxo_atributo cfa ON cfa.id_cenario_fluxo = cf.id_cenario_fluxo
					INNER JOIN atributos a ON a.id = cfa.idatributo
					INNER JOIN rnf r ON r.id = a.idRNF
					WHERE c.idcenario = '$idcenario'
					GROUP BY r.id ";
		$con->execute_query($sql);
		$resultado = mysql_num_rows($con->resultado);
		while ($row = mysql_fetch_object($con->resultado)){
			$retorno['rnf'][] = (object)$row;
		}
		
		return $retorno;
	}
}
?>