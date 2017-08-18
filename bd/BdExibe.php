<?php
include_once 'Conexao.php';

class BdExibe{
		
	function Visualizar($dados){
		$con = new Conexao();
		$idrnf = $dados['idRNF'];
		
		$sql = " SELECT cas.nome as nomecasoUso, cf.idfluxo, cf.nrPasso, r.nome as nomeRNF, a.alias
					FROM cenario c
					INNER JOIN casouso cas ON cas.id = c.idcasoUso
					INNER JOIN cenario_fluxo cf ON cf.idcenario = c.idcenario
				    INNER JOIN cenario_fluxo_atributo cfa ON cfa.id_cenario_fluxo = cf.id_cenario_fluxo
				    INNER JOIN atributos a ON a.id = cfa.idatributo
				    INNER JOIN rnf r ON r.id = a.idRNF
					WHERE r.id = '$idrnf'
	        		GROUP BY cf.nrPasso, cas.id
                    ORDER BY cas.nome, cf.nrPasso  ";
		
		$con->execute_query($sql);
		$resultado = mysql_num_rows($con->resultado);
		while ($row = mysql_fetch_object($con->resultado)){
			$retorno['passos'][] = (object)$row;
		}
		
		$sql = " SELECT cas.nome as nomecasoUso, cf.idfluxo, cf.nrPasso, r.nome as nomeRNF, a.alias
					FROM cenario c
					INNER JOIN casouso cas ON cas.id = c.idcasoUso
					INNER JOIN cenario_fluxo cf ON cf.idcenario = c.idcenario
				    INNER JOIN cenario_fluxo_atributo cfa ON cfa.id_cenario_fluxo = cf.id_cenario_fluxo
				    INNER JOIN atributos a ON a.id = cfa.idatributo
				    INNER JOIN rnf r ON r.id = a.idRNF
					WHERE r.id = '$idrnf'
	        		ORDER BY cas.nome, cf.nrPasso, a.id ";
		$con->execute_query($sql);
		$resultado = mysql_num_rows($con->resultado);
		while ($row = mysql_fetch_object($con->resultado)){
			$retorno['atributo'][] = (object)$row;
		}
		
		return $retorno;
	}
	
	function listar(){
		$con = new Conexao();
		$sql = " SELECT r.nome, r.id
					FROM cenario c
					INNER JOIN casouso cas ON cas.id = c.idcasoUso
					INNER JOIN cenario_fluxo cf ON cf.idcenario = c.idcenario
				    INNER JOIN cenario_fluxo_atributo cfa ON cfa.id_cenario_fluxo = cf.id_cenario_fluxo
				    INNER JOIN atributos a ON a.id = cfa.idatributo
				    INNER JOIN rnf r ON r.id = a.idRNF
					GROUP BY r.id
                    ORDER BY r.id ";
		$con->execute_query($sql);
		$resultado = mysql_num_rows($con->resultado);
		while ($row = mysql_fetch_object($con->resultado)){
			$retorno[] = (object)$row;
		}
		return $retorno;
	}
}
?>