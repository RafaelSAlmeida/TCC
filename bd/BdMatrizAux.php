<?php
include_once 'Conexao.php';

class BdMatrizAux{
	
	function EspalhaCasoUso($dados){
		$con = new Conexao();
		$sql = "";
		$idrnf = $dados['idRNF'];
		if(count($_POST['idaspectcasoUso2']) > 1){
			for($i = 0; $i < count($_POST['idaspectcasoUso2']); $i++){
				 
				$sql .= " (SELECT cas.nome as nomecasouso,cas.id as idcasoUso, r.nome as rnf,a.id as idatr, a.alias, cf.idfluxo, cf.nrPasso
				FROM rnf r
				INNER JOIN atributos a ON a.idRNF = r.id
				INNER JOIN cenario_fluxo_atributo cfa ON cfa.idatributo = a.id
				INNER JOIN cenario_fluxo cf ON cf.id_cenario_fluxo = cfa.id_cenario_fluxo
				INNER JOIN cenario c ON c.idcenario = cf.idcenario
				INNER JOIN casouso cas ON cas.id = c.idcasoUso
				WHERE c.idcasoUso = '".$_POST['idaspectcasoUso2'][$i]."' AND r.id = '$idrnf'
				ORDER BY cf.idfluxo) ";
				if($i+1 < count($_POST['idaspectcasoUso2'])){
					$sql .= " UNION ";
				}
			}
		}else{
			$sql .= " (SELECT cas.nome as nomecasouso,cas.id as idcasoUso, r.nome as rnf,a.id as idatr, a.alias, cf.idfluxo, cf.nrPasso
				FROM rnf r
				INNER JOIN atributos a ON a.idRNF = r.id
				INNER JOIN cenario_fluxo_atributo cfa ON cfa.idatributo = a.id
				INNER JOIN cenario_fluxo cf ON cf.id_cenario_fluxo = cfa.id_cenario_fluxo
				INNER JOIN cenario c ON c.idcenario = cf.idcenario
				INNER JOIN casouso cas ON cas.id = c.idcasoUso
				WHERE c.idcasoUso = '".$_POST['idaspectcasoUso2'][0]."' AND r.id = '$idrnf'
							ORDER BY cf.idfluxo) ";
		}
		
		$con->execute_query($sql);
		$resultado = mysql_num_rows($con->resultado);
		while ($row = mysql_fetch_object($con->resultado)){
			$retorno['dados'][] = (object)$row;
		}
		$sql = "  ";	
	
		if(count($_POST['idaspectcasoUso2']) > 1){
			for($i = 0; $i < count($_POST['idaspectcasoUso2']); $i++){
				 
				$sql .= " (SELECT cas.nome as nomecasouso,cas.id as idcasoUso, r.nome as rnf,a.id as idatr, a.alias, cf.idfluxo, cf.nrPasso
				FROM rnf r
				INNER JOIN atributos a ON a.idRNF = r.id
				INNER JOIN cenario_fluxo_atributo cfa ON cfa.idatributo = a.id
				INNER JOIN cenario_fluxo cf ON cf.id_cenario_fluxo = cfa.id_cenario_fluxo
				INNER JOIN cenario c ON c.idcenario = cf.idcenario
				INNER JOIN casouso cas ON cas.id = c.idcasoUso
				INNER JOIN fluxo f ON f.id = cf.idfluxo
				WHERE c.idcasoUso = '".$_POST['idaspectcasoUso2'][$i]."' AND r.id = '$idrnf'
				GROUP BY cf.nrPasso
				ORDER BY f.prioridade,cf.nrPasso) ";
				if($i+1 < count($_POST['idaspectcasoUso2'])){
					$sql .= " UNION ";
				}
			}
		}else{
			$sql .= " (SELECT cas.nome as nomecasouso,cas.id as idcasoUso, r.nome as rnf,a.id as idatr, a.alias, cf.idfluxo, cf.nrPasso
				FROM rnf r
				INNER JOIN atributos a ON a.idRNF = r.id
				INNER JOIN cenario_fluxo_atributo cfa ON cfa.idatributo = a.id
				INNER JOIN cenario_fluxo cf ON cf.id_cenario_fluxo = cfa.id_cenario_fluxo
				INNER JOIN cenario c ON c.idcenario = cf.idcenario
				INNER JOIN casouso cas ON cas.id = c.idcasoUso
				INNER JOIN fluxo f ON f.id = cf.idfluxo
				WHERE c.idcasoUso = '".$_POST['idaspectcasoUso2'][0]."' AND r.id = '$idrnf'
				GROUP BY cf.nrPasso
				ORDER BY f.prioridade,cf.nrPasso) ";
		}
		
		$con->execute_query($sql);
		$resultado = mysql_num_rows($con->resultado);
		while ($row = mysql_fetch_object($con->resultado)){
			$retorno['passos'][] = (object)$row;
		}
		
		$sql = " SELECT a.id,a.alias FROM atributos a WHERE a.idRNF = '$idrnf' ORDER BY a.id ";
		
		$con->execute_query($sql);
		
		while ($row = mysql_fetch_object($con->resultado)){
			$retorno['atributo'][] = (object)$row;
		}
		
		$sql = "  ";
		
		if(count($_POST['idaspectcasoUso2']) > 1){
			for($i = 0; $i < count($_POST['idaspectcasoUso2']); $i++){
					
				$sql .= " (SELECT cas.nome
				FROM rnf r
				INNER JOIN atributos a ON a.idRNF = r.id
				INNER JOIN cenario_fluxo_atributo cfa ON cfa.idatributo = a.id
				INNER JOIN cenario_fluxo cf ON cf.id_cenario_fluxo = cfa.id_cenario_fluxo
				INNER JOIN cenario c ON c.idcenario = cf.idcenario
				INNER JOIN casouso cas ON cas.id = c.idcasoUso
				INNER JOIN fluxo f ON f.id = cf.idfluxo
				WHERE c.idcasoUso = '".$_POST['idaspectcasoUso2'][$i]."' AND r.id = '$idrnf'
						GROUP BY cf.nrPasso
						ORDER BY f.prioridade,cf.nrPasso) ";
				if($i+1 < count($_POST['idaspectcasoUso2'])){
					$sql .= " UNION ";
				}
			}
		}else{
			$sql .= " (SELECT cas.nome
				FROM rnf r
				INNER JOIN atributos a ON a.idRNF = r.id
				INNER JOIN cenario_fluxo_atributo cfa ON cfa.idatributo = a.id
				INNER JOIN cenario_fluxo cf ON cf.id_cenario_fluxo = cfa.id_cenario_fluxo
				INNER JOIN cenario c ON c.idcenario = cf.idcenario
				INNER JOIN casouso cas ON cas.id = c.idcasoUso
				INNER JOIN fluxo f ON f.id = cf.idfluxo
				WHERE c.idcasoUso = '".$_POST['idaspectcasoUso2'][0]."' AND r.id = '$idrnf'
						GROUP BY cf.nrPasso
						ORDER BY f.prioridade,cf.nrPasso) ";
		}
		
		$con->execute_query($sql);
		$resultado = mysql_num_rows($con->resultado);
		while ($row = mysql_fetch_object($con->resultado)){
			$retorno['nome'][] = (object)$row;
		}
		
		$sql = "  ";
		
		if(count($_POST['idaspectcasoUso2']) > 1){
			for($i = 0; $i < count($_POST['idaspectcasoUso2']); $i++){
					
				$sql .= " (SELECT a.id, COUNT(a.id) as conta
				FROM rnf r
				INNER JOIN atributos a ON a.idRNF = r.id
				INNER JOIN cenario_fluxo_atributo cfa ON cfa.idatributo = a.id
				INNER JOIN cenario_fluxo cf ON cf.id_cenario_fluxo = cfa.id_cenario_fluxo
				INNER JOIN cenario c ON c.idcenario = cf.idcenario
				INNER JOIN casouso cas ON cas.id = c.idcasoUso
				INNER JOIN fluxo f ON f.id = cf.idfluxo
				WHERE c.idcasoUso = '".$_POST['idaspectcasoUso2'][$i]."' AND r.id = '$idrnf'
						GROUP BY a.id
						ORDER BY f.prioridade,cf.nrPasso) ";
				if($i+1 < count($_POST['idaspectcasoUso2'])){
					$sql .= " UNION ";
				}
			}
		}else{
			$sql .= " (SELECT a.id, COUNT(a.id) as conta
				FROM rnf r
				INNER JOIN atributos a ON a.idRNF = r.id
				INNER JOIN cenario_fluxo_atributo cfa ON cfa.idatributo = a.id
				INNER JOIN cenario_fluxo cf ON cf.id_cenario_fluxo = cfa.id_cenario_fluxo
				INNER JOIN cenario c ON c.idcenario = cf.idcenario
				INNER JOIN casouso cas ON cas.id = c.idcasoUso
				INNER JOIN fluxo f ON f.id = cf.idfluxo
				WHERE c.idcasoUso = '".$_POST['idaspectcasoUso2'][0]."' AND r.id = '$idrnf'
						GROUP BY a.id
						ORDER BY f.prioridade,cf.nrPasso) ";
		}
		
		$con->execute_query($sql);
		$resultado = mysql_num_rows($con->resultado);
		while ($row = mysql_fetch_object($con->resultado)){
			$retorno['conta'][] = (object)$row;
		}
		
		$retorno['tipo'] = "Caso de Uso";
		
		return $retorno;
	}
	
	function EspalhaSubsistema($dados){
		$con = new Conexao();
		
		$sql = "";
		$idrnf = $dados['idRNF'];
		if(count($_POST['idaspectsubsist2']) > 1){
			for($i = 0; $i < count($_POST['idaspectsubsist2']); $i++){
					
				$sql .= " (SELECT cas.nome as nomecasouso,cas.id as idcasoUso, r.nome as rnf,a.id as idatr, a.alias, cf.idfluxo, cf.nrPasso
				FROM rnf r
				INNER JOIN atributos a ON a.idRNF = r.id
				INNER JOIN cenario_fluxo_atributo cfa ON cfa.idatributo = a.id
				INNER JOIN cenario_fluxo cf ON cf.id_cenario_fluxo = cfa.id_cenario_fluxo
				INNER JOIN cenario c ON c.idcenario = cf.idcenario
				INNER JOIN casouso cas ON cas.id = c.idcasoUso
				INNER JOIN subsistemacasouso sc ON sc.idcasoUso = c.idcasoUso 
				WHERE sc.idsubsistema = '".$_POST['idaspectsubsist2'][$i]."' AND r.id = '$idrnf'
					ORDER BY cf.idfluxo) ";
				if($i+1 < count($_POST['idaspectsubsist2'])){
					$sql .= " UNION ";
				}
			}
		}else{
			$sql .= " (SELECT cas.nome as nomecasouso,cas.id as idcasoUso, r.nome as rnf,a.id as idatr, a.alias, cf.idfluxo, cf.nrPasso
				FROM rnf r
				INNER JOIN atributos a ON a.idRNF = r.id
				INNER JOIN cenario_fluxo_atributo cfa ON cfa.idatributo = a.id
				INNER JOIN cenario_fluxo cf ON cf.id_cenario_fluxo = cfa.id_cenario_fluxo
				INNER JOIN cenario c ON c.idcenario = cf.idcenario
				INNER JOIN casouso cas ON cas.id = c.idcasoUso
				INNER JOIN subsistemacasouso sc ON sc.idcasoUso = c.idcasoUso 
				WHERE sc.idsubsistema = '".$_POST['idaspectsubsist2'][0]."' AND r.id = '$idrnf'
					ORDER BY cf.idfluxo) ";
		}
		
		$con->execute_query($sql);
		$resultado = mysql_num_rows($con->resultado);
		while ($row = mysql_fetch_object($con->resultado)){
		$retorno['dados'][] = (object)$row;
		}
		$sql = "  ";
	
		if(count($_POST['idaspectsubsist2']) > 1){
			for($i = 0; $i < count($_POST['idaspectsubsist2']); $i++){
							
				$sql .= " (SELECT cas.nome as nomecasouso,cas.id as idcasoUso, r.nome as rnf,a.id as idatr, a.alias, cf.idfluxo, cf.nrPasso
				FROM rnf r
				INNER JOIN atributos a ON a.idRNF = r.id
				INNER JOIN cenario_fluxo_atributo cfa ON cfa.idatributo = a.id
				INNER JOIN cenario_fluxo cf ON cf.id_cenario_fluxo = cfa.id_cenario_fluxo
				INNER JOIN cenario c ON c.idcenario = cf.idcenario
				INNER JOIN casouso cas ON cas.id = c.idcasoUso
				INNER JOIN subsistemacasouso sc ON sc.idcasoUso = c.idcasoUso
				INNER JOIN fluxo f ON f.id = cf.idfluxo 
				WHERE sc.idsubsistema = '".$_POST['idaspectsubsist2'][$i]."' AND r.id = '$idrnf'
					GROUP BY cf.id_cenario_fluxo
					ORDER BY f.prioridade,cf.nrPasso) ";
					if($i+1 < count($_POST['idaspectsubsist2'])){
					$sql .= " UNION ";
				}
			}
		}else{
			$sql .= " (SELECT cas.nome as nomecasouso,cas.id as idcasoUso, r.nome as rnf,a.id as idatr, a.alias, cf.idfluxo, cf.nrPasso
				FROM rnf r
				INNER JOIN atributos a ON a.idRNF = r.id
				INNER JOIN cenario_fluxo_atributo cfa ON cfa.idatributo = a.id
				INNER JOIN cenario_fluxo cf ON cf.id_cenario_fluxo = cfa.id_cenario_fluxo
				INNER JOIN cenario c ON c.idcenario = cf.idcenario
				INNER JOIN casouso cas ON cas.id = c.idcasoUso
				INNER JOIN subsistemacasouso sc ON sc.idcasoUso = c.idcasoUso 
				INNER JOIN fluxo f ON f.id = cf.idfluxo
				WHERE sc.idsubsistema = '".$_POST['idaspectsubsist2'][0]."' AND r.id = '$idrnf'
					GROUP BY cf.nrPasso, f.id,cas.nome
					ORDER BY cas.id,cf.nrPasso) ";
		}
		
		$con->execute_query($sql);
		$resultado = mysql_num_rows($con->resultado);
		while ($row = mysql_fetch_object($con->resultado)){
			$retorno['passos'][] = (object)$row;
		}
	
		$sql = " SELECT a.id,a.alias FROM atributos a WHERE a.idRNF = '$idrnf' ORDER BY a.id ";
	
		$con->execute_query($sql);
	
		while ($row = mysql_fetch_object($con->resultado)){
			$retorno['atributo'][] = (object)$row;
		}

		$sql = "  ";
		if(count($_POST['idaspectsubsist2']) > 1){
			for($i = 0; $i < count($_POST['idaspectsubsist2']); $i++){
					
				$sql .= " (SELECT sub.nome
						FROM subsistema sub
						WHERE sub.id = '".$_POST['idaspectsubsist2'][$i]."') ";
				if($i+1 < count($_POST['idaspectsubsist2'])){
					$sql .= " UNION ";
				}
			}
		}else{
			$sql .= " (SELECT sub.nome
						FROM subsistema sub
						WHERE sub.id = '".$_POST['idaspectsubsist2'][0]."') ";
		}
		
		$con->execute_query($sql);
		$resultado = mysql_num_rows($con->resultado);
		while ($row = mysql_fetch_object($con->resultado)){
			$retorno['nome'][] = (object)$row;
		}
		
		$sql = "  ";
		if(count($_POST['idaspectsubsist2']) > 1){
			for($i = 0; $i < count($_POST['idaspectsubsist2']); $i++){
					
				$sql .= " (SELECT a.id, COUNT(a.id) as conta
				FROM rnf r
				INNER JOIN atributos a ON a.idRNF = r.id
				INNER JOIN cenario_fluxo_atributo cfa ON cfa.idatributo = a.id
				INNER JOIN cenario_fluxo cf ON cf.id_cenario_fluxo = cfa.id_cenario_fluxo
				INNER JOIN cenario c ON c.idcenario = cf.idcenario
				INNER JOIN casouso cas ON cas.id = c.idcasoUso
				INNER JOIN subsistemacasouso sc ON sc.idcasoUso = c.idcasoUso
				INNER JOIN fluxo f ON f.id = cf.idfluxo
				WHERE sc.idsubsistema = '".$_POST['idaspectsubsist2'][$i]."' AND r.id = '$idrnf'
						GROUP BY a.id
						ORDER BY f.prioridade,cf.nrPasso) ";
				if($i+1 < count($_POST['idaspectsubsist2'])){
				$sql .= " UNION ";
				}
			}
		}else{
			$sql .= " (SELECT a.id, COUNT(a.id) as conta
				FROM rnf r
				INNER JOIN atributos a ON a.idRNF = r.id
				INNER JOIN cenario_fluxo_atributo cfa ON cfa.idatributo = a.id
				INNER JOIN cenario_fluxo cf ON cf.id_cenario_fluxo = cfa.id_cenario_fluxo
				INNER JOIN cenario c ON c.idcenario = cf.idcenario
				INNER JOIN casouso cas ON cas.id = c.idcasoUso
				INNER JOIN subsistemacasouso sc ON sc.idcasoUso = c.idcasoUso
				INNER JOIN fluxo f ON f.id = cf.idfluxo
				WHERE sc.idsubsistema = '".$_POST['idaspectsubsist2'][0]."' AND r.id = '$idrnf'
						GROUP BY a.id
						ORDER BY cas.id,cf.nrPasso) ";
		}
		
		$con->execute_query($sql);
		$resultado = mysql_num_rows($con->resultado);
		while ($row = mysql_fetch_object($con->resultado)){
			$retorno['conta'][] = (object)$row;
		}
		
		$retorno['tipo'] = "Subsistema";
	
		return $retorno;
	}
	
	function EspalhaSistema($dados){
		$con = new Conexao();
	
		$sql = "";
		$idrnf = $dados['idRNF'];
		if(count($_POST['idaspectsist2']) > 1){
			for($i = 0; $i < count($_POST['idaspectsist2']); $i++){
					
				$sql .= " (SELECT cas.nome as nomecasouso,cas.id as idcasoUso, r.nome as rnf,a.id as idatr, a.alias, cf.idfluxo, cf.nrPasso
				FROM rnf r
				INNER JOIN atributos a ON a.idRNF = r.id
				INNER JOIN cenario_fluxo_atributo cfa ON cfa.idatributo = a.id
				INNER JOIN cenario_fluxo cf ON cf.id_cenario_fluxo = cfa.id_cenario_fluxo
				INNER JOIN cenario c ON c.idcenario = cf.idcenario
				INNER JOIN casouso cas ON cas.id = c.idcasoUso
				INNER JOIN subsistemacasouso sc ON sc.idcasoUso = c.idcasoUso
				WHERE sc.idsistema = '".$_POST['idaspectsist2'][$i]."' AND r.id = '$idrnf'
					ORDER BY cf.idfluxo) ";
					if($i+1 < count($_POST['idaspectsist2'])){
					$sql .= " UNION ";
					}
			}
			}else{
			$sql .= " (SELECT cas.nome as nomecasouso,cas.id as idcasoUso, r.nome as rnf,a.id as idatr, a.alias, cf.idfluxo, cf.nrPasso
				FROM rnf r
				INNER JOIN atributos a ON a.idRNF = r.id
				INNER JOIN cenario_fluxo_atributo cfa ON cfa.idatributo = a.id
				INNER JOIN cenario_fluxo cf ON cf.id_cenario_fluxo = cfa.id_cenario_fluxo
				INNER JOIN cenario c ON c.idcenario = cf.idcenario
				INNER JOIN casouso cas ON cas.id = c.idcasoUso
				INNER JOIN subsistemacasouso sc ON sc.idcasoUso = c.idcasoUso
				WHERE sc.idsistema = '".$_POST['idaspectsist2'][0]."' AND r.id = '$idrnf'
					ORDER BY cf.idfluxo) ";
			}
	
			$con->execute_query($sql);
			$resultado = mysql_num_rows($con->resultado);
			while ($row = mysql_fetch_object($con->resultado)){
			$retorno['dados'][] = (object)$row;
			}
			$sql = "  ";
	
			if(count($_POST['idaspectsist2']) > 1){
				for($i = 0; $i < count($_POST['idaspectsist2']); $i++){
					
				$sql .= " (SELECT cas.nome as nomecasouso,cas.id as idcasoUso, r.nome as rnf,a.id as idatr, a.alias, cf.idfluxo, cf.nrPasso
					FROM rnf r
					INNER JOIN atributos a ON a.idRNF = r.id
					INNER JOIN cenario_fluxo_atributo cfa ON cfa.idatributo = a.id
					INNER JOIN cenario_fluxo cf ON cf.id_cenario_fluxo = cfa.id_cenario_fluxo
					INNER JOIN cenario c ON c.idcenario = cf.idcenario
					INNER JOIN casouso cas ON cas.id = c.idcasoUso
					INNER JOIN subsistemacasouso sc ON sc.idcasoUso = c.idcasoUso
					INNER JOIN fluxo f ON f.id = cf.idfluxo
					WHERE sc.idsistema = '".$_POST['idaspectsist2'][$i]."' AND r.id = '$idrnf'
						GROUP BY cf.id_cenario_fluxo
						ORDER BY f.prioridade,cf.nrPasso) ";
						if($i+1 < count($_POST['idaspectsist2'])){
							$sql .= " UNION ";
						}
				}
			}else{
			$sql .= " (SELECT cas.nome as nomecasouso,cas.id as idcasoUso, r.nome as rnf,a.id as idatr, a.alias, cf.idfluxo, cf.nrPasso
				FROM rnf r
				INNER JOIN atributos a ON a.idRNF = r.id
				INNER JOIN cenario_fluxo_atributo cfa ON cfa.idatributo = a.id
				INNER JOIN cenario_fluxo cf ON cf.id_cenario_fluxo = cfa.id_cenario_fluxo
				INNER JOIN cenario c ON c.idcenario = cf.idcenario
				INNER JOIN casouso cas ON cas.id = c.idcasoUso
				INNER JOIN subsistemacasouso sc ON sc.idcasoUso = c.idcasoUso
				INNER JOIN fluxo f ON f.id = cf.idfluxo
				WHERE sc.idsistema = '".$_POST['idaspectsist2'][0]."' AND r.id = '$idrnf'
					GROUP BY cf.nrPasso, f.id,cas.nome
					ORDER BY cas.id,cf.nrPasso) ";
			}
	
			$con->execute_query($sql);
			$resultado = mysql_num_rows($con->resultado);
			while ($row = mysql_fetch_object($con->resultado)){
				$retorno['passos'][] = (object)$row;
			}
	
			$sql = " SELECT a.id,a.alias FROM atributos a WHERE a.idRNF = '$idrnf' ORDER BY a.id ";
	
			$con->execute_query($sql);
	
			while ($row = mysql_fetch_object($con->resultado)){
				$retorno['atributo'][] = (object)$row;
			}
			
			$sql = "  ";
			if(count($_POST['idaspectsist2']) > 1){
				for($i = 0; $i < count($_POST['idaspectsist2']); $i++){
			
					$sql .= " (SELECT s.nome
							FROM sistema s
							WHERE s.id = '".$_POST['idaspectsist2'][$i]."') ";
					if($i+1 < count($_POST['idaspectsist2'])){
						$sql .= " UNION ";
					}
				}
			}else{
				$sql .= " (SELECT s.nome
							FROM sistema s
							WHERE s.id = '".$_POST['idaspectsist2'][0]."') ";
			}
			
			$con->execute_query($sql);
			$resultado = mysql_num_rows($con->resultado);
			while ($row = mysql_fetch_object($con->resultado)){
				$retorno['nome'][] = (object)$row;
			}

			$sql = "  ";
			if(count($_POST['idaspectsist2']) > 1){
				for($i = 0; $i < count($_POST['idaspectsist2']); $i++){
						
					$sql .= " (SELECT a.id, COUNT(a.id) as conta
								FROM rnf r
								INNER JOIN atributos a ON a.idRNF = r.id
								INNER JOIN cenario_fluxo_atributo cfa ON cfa.idatributo = a.id
								INNER JOIN cenario_fluxo cf ON cf.id_cenario_fluxo = cfa.id_cenario_fluxo
								INNER JOIN cenario c ON c.idcenario = cf.idcenario
								INNER JOIN casouso cas ON cas.id = c.idcasoUso
								INNER JOIN subsistemacasouso sc ON sc.idcasoUso = c.idcasoUso
								INNER JOIN fluxo f ON f.id = cf.idfluxo
								WHERE sc.idsistema = '".$_POST['idaspectsist2'][$i]."' AND r.id = '$idrnf'
								GROUP BY a.id
								ORDER BY f.prioridade,cf.nrPasso) ";
					if($i+1 < count($_POST['idaspectsist2'])){
						$sql .= " UNION ";
					}
				}
			}else{
					$sql .= " (SELECT a.id, COUNT(a.id) as conta
							FROM rnf r
							INNER JOIN atributos a ON a.idRNF = r.id
							INNER JOIN cenario_fluxo_atributo cfa ON cfa.idatributo = a.id
							INNER JOIN cenario_fluxo cf ON cf.id_cenario_fluxo = cfa.id_cenario_fluxo
							INNER JOIN cenario c ON c.idcenario = cf.idcenario
							INNER JOIN casouso cas ON cas.id = c.idcasoUso
							INNER JOIN subsistemacasouso sc ON sc.idcasoUso = c.idcasoUso
							INNER JOIN fluxo f ON f.id = cf.idfluxo
							WHERE sc.idsistema = '".$_POST['idaspectsist2'][0]."' AND r.id = '$idrnf'
							GROUP BY a.id
							ORDER BY cas.id,cf.nrPasso) ";
					}
			
			$con->execute_query($sql);
			$resultado = mysql_num_rows($con->resultado);
			while ($row = mysql_fetch_object($con->resultado)){
				$retorno['conta'][] = (object)$row;
			}
			
			$retorno['tipo'] = "Sistema";
	
					return $retorno;
	}
}