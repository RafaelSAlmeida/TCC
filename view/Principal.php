<!DOCTYPE html>
<html>
    <head>
        <title>AspectNFR</title>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    </head>
    <body>
    <style>
    	a:hover{
    		background-color: yellow;
    		
    	}
    </style>
    <script>
		function aparecer(i){
				if(i == 1){
					document.getElementById("subsistema").style.display = "none";
					document.getElementById("casoUso").style.display = "none";
					document.getElementById("rnf").style.display = "none";
					document.getElementById("atributo").style.display = "none";
					document.getElementById("cenario").style.display = "none";
					document.getElementById("fluxo").style.display = "none";
					document.getElementById("matriz").style.display = "none";
					document.getElementById("identifAspect").style.display = "none";
					document.getElementById("cenarioAspect").style.display = "none";
					document.getElementById("Aspecto").style.display = "none";
					document.getElementById("sistema").style.display = "block";
				}else if(i == 2){
					document.getElementById("sistema").style.display = "none";
					document.getElementById("casoUso").style.display = "none";
					document.getElementById("rnf").style.display = "none";
					document.getElementById("atributo").style.display = "none";
					document.getElementById("cenario").style.display = "none";
					document.getElementById("fluxo").style.display = "none";
					document.getElementById("matriz").style.display = "none";
					document.getElementById("identifAspect").style.display = "none";
					document.getElementById("cenarioAspect").style.display = "none";
					document.getElementById("Aspecto").style.display = "none";
					document.getElementById("subsistema").style.display = "block";
				}else if(i == 3){
					document.getElementById("subsistema").style.display = "none";
					document.getElementById("sistema").style.display = "none";
					document.getElementById("rnf").style.display = "none";
					document.getElementById("atributo").style.display = "none";
					document.getElementById("cenario").style.display = "none";
					document.getElementById("fluxo").style.display = "none";
					document.getElementById("matriz").style.display = "none";
					document.getElementById("identifAspect").style.display = "none";
					document.getElementById("cenarioAspect").style.display = "none";
					document.getElementById("Aspecto").style.display = "none";
					document.getElementById("casoUso").style.display = "block";
				}else if(i == 4){
					document.getElementById("subsistema").style.display = "none";
					document.getElementById("casoUso").style.display = "none";
					document.getElementById("atributo").style.display = "none";
					document.getElementById("sistema").style.display = "none";
					document.getElementById("cenario").style.display = "none";
					document.getElementById("fluxo").style.display = "none";
					document.getElementById("matriz").style.display = "none";
					document.getElementById("identifAspect").style.display = "none";
					document.getElementById("cenarioAspect").style.display = "none";
					document.getElementById("Aspecto").style.display = "none";
					document.getElementById("rnf").style.display = "block";
				}else if(i == 5){
					document.getElementById("subsistema").style.display = "none";
					document.getElementById("casoUso").style.display = "none";
					document.getElementById("rnf").style.display = "none";
					document.getElementById("sistema").style.display = "none";
					document.getElementById("cenario").style.display = "none";
					document.getElementById("fluxo").style.display = "none";
					document.getElementById("matriz").style.display = "none";
					document.getElementById("identifAspect").style.display = "none";
					document.getElementById("cenarioAspect").style.display = "none";
					document.getElementById("Aspecto").style.display = "none";
					document.getElementById("atributo").style.display = "block";
				}else if(i == 6){
					document.getElementById("subsistema").style.display = "none";
					document.getElementById("casoUso").style.display = "none";
					document.getElementById("rnf").style.display = "none";
					document.getElementById("sistema").style.display = "none";
					document.getElementById("atributo").style.display = "none";
					document.getElementById("fluxo").style.display = "none";
					document.getElementById("matriz").style.display = "none";
					document.getElementById("identifAspect").style.display = "none";
					document.getElementById("cenarioAspect").style.display = "none";
					document.getElementById("Aspecto").style.display = "none";
					document.getElementById("cenario").style.display = "block";
				}else if(i == 7){
					document.getElementById("subsistema").style.display = "none";
					document.getElementById("casoUso").style.display = "none";
					document.getElementById("rnf").style.display = "none";
					document.getElementById("sistema").style.display = "none";
					document.getElementById("atributo").style.display = "none";
					document.getElementById("cenario").style.display = "none";
					document.getElementById("matriz").style.display = "none";
					document.getElementById("identifAspect").style.display = "none";
					document.getElementById("cenarioAspect").style.display = "none";
					document.getElementById("Aspecto").style.display = "none";
					document.getElementById("fluxo").style.display = "block";
				}else if(i == 8){
					document.getElementById("subsistema").style.display = "none";
					document.getElementById("casoUso").style.display = "none";
					document.getElementById("rnf").style.display = "none";
					document.getElementById("sistema").style.display = "none";
					document.getElementById("atributo").style.display = "none";
					document.getElementById("cenario").style.display = "none";
					document.getElementById("fluxo").style.display = "none";
					document.getElementById("identifAspect").style.display = "none";
					document.getElementById("cenarioAspect").style.display = "none";
					document.getElementById("Aspecto").style.display = "none";
					document.getElementById("matriz").style.display = "block";
				}else if(i == 9){
					document.getElementById("subsistema").style.display = "none";
					document.getElementById("casoUso").style.display = "none";
					document.getElementById("rnf").style.display = "none";
					document.getElementById("sistema").style.display = "none";
					document.getElementById("atributo").style.display = "none";
					document.getElementById("cenario").style.display = "none";
					document.getElementById("fluxo").style.display = "none";
					document.getElementById("matriz").style.display = "none";
					document.getElementById("cenarioAspect").style.display = "none";
					document.getElementById("Aspecto").style.display = "none";
					document.getElementById("identifAspect").style.display = "block";
				}else if(i == 10){
					document.getElementById("subsistema").style.display = "none";
					document.getElementById("casoUso").style.display = "none";
					document.getElementById("rnf").style.display = "none";
					document.getElementById("sistema").style.display = "none";
					document.getElementById("atributo").style.display = "none";
					document.getElementById("cenario").style.display = "none";
					document.getElementById("fluxo").style.display = "none";
					document.getElementById("matriz").style.display = "none";
					document.getElementById("identifAspect").style.display = "none";
					document.getElementById("Aspecto").style.display = "none";
					document.getElementById("cenarioAspect").style.display = "block";
				}else if(i == 11){
					document.getElementById("subsistema").style.display = "none";
					document.getElementById("casoUso").style.display = "none";
					document.getElementById("rnf").style.display = "none";
					document.getElementById("sistema").style.display = "none";
					document.getElementById("atributo").style.display = "none";
					document.getElementById("cenario").style.display = "none";
					document.getElementById("fluxo").style.display = "none";
					document.getElementById("matriz").style.display = "none";
					document.getElementById("identifAspect").style.display = "none";
					document.getElementById("cenarioAspect").style.display = "none";
					document.getElementById("Aspecto").style.display = "block";
				}
			}
    </script>
    <div style="width:100%;height: 300px;">
        <h1 style="margin-left: 45%">AspectNFR</h1>
        <div style="width:20%;"><h2 style="margin-left: 20%;">Menu</h2></div>
        <div style="width:20%;position: absolute;background-color: gray;">
        	<a style="margin-left: 20%;cursor: pointer;" onclick="aparecer(1)">Sistema</a><br/>
        	<a style="margin-left: 20%;cursor: pointer;" onclick="aparecer(2)">Subsistema</a><br/>
        	<a style="margin-left: 20%;cursor: pointer;" onclick="aparecer(3)">Caso de Uso</a><br/>
        	<a style="margin-left: 20%;cursor: pointer;" onclick="aparecer(4)">Requisito Não-Funcional</a><br/>
        	<a style="margin-left: 20%;cursor: pointer;" onclick="aparecer(5)">Atributo</a><br/>
        	<a style="margin-left: 20%;cursor: pointer;" onclick="aparecer(6)">Cenário</a><br/>
        	<a style="margin-left: 20%;cursor: pointer;" onclick="aparecer(7)">Tipo de Fluxo</a><br/>
        	<a style="margin-left: 20%;cursor: pointer;" onclick="aparecer(8)">Matrizes</a><br/>
        	<a style="margin-left: 20%;cursor: pointer;" onclick="aparecer(9)">Espalhamento de Aspectos</a><br/>
        	<a style="margin-left: 20%;cursor: pointer;" onclick="aparecer(10)">Cenários com Aspectos</a><br/>
        	<a style="margin-left: 20%;cursor: pointer;" onclick="aparecer(11)">Tipos de Aspectos</a><br/>
        </div>
        <div id="sistema" style="width:50%;float: right;margin-right:25%;display: none;">
        <h3 style="">Sistema</h3>
        <?php include_once '../frm/ManagerSistema.php';
        		$sistema = new BdSistema();
        		$dados = $sistema->listar();
        		if($dados){?>
        <table border="1">
        	<tr>
        		<td>Nome do Sistema</td>
        		<td></td>
        		<td></td>
        	</tr>
        	<?php
	        		foreach ($dados as $valores){?>
	        			<tr>
	        				<td><?php echo $valores->nome;?></td>
			        		<td><form method="POST" action="FormSistema2.php">
	            					<input type="hidden" value="<?php echo $valores->id;?>" name="idsistema">
	            					<input type="hidden" value="<?php echo $valores->nome;?>" name="nomesistema">
	            					<input type="submit" value="Editar">
	        					</form></td>
			        		<td><form action="../frm/ManagerSistema.php" method="POST">
			        			<input type="hidden" value="<?php echo $valores->id;?>" name="idsistema">
	            				<input type="submit" value="Excluir" id="excluir" name="excluir">
	            				</form>
	        				</td>
	        			</tr>
	        		
	        		<?php }
        		}else{
        			echo 'Não há Sistemas Cadastrados"';
        		}
        	 ?>
        </table>
        <form method="LINK" action="FormSistema.html" style="margin-left: 20%;">
            <input type="submit" value="Novo Sistema">
        </form>
        </div>
        <!-- Fim da div sistema -->
        
        <div id="subsistema" style="width:50%;float: right;margin-right:25%;display: none">
        <h3 style="">Subsistema</h3>
        <?php 
	        include_once '../frm/ManagerSubsistema.php';
	        $subsistema = new BdSubsistema();
	        $dados = $subsistema->listar();
	        if(!$dados['sistema']) echo 'Não há Sistemas cadastrados!';
	        else if(!$dados['subsistema']){
	        	echo 'Não há Subsistemas cadastrados!';
	        	?><form method="LINK" action="FormSubsistema.php" style="margin-left: 20%;">
            		<input type="submit" value="Novo Subsistema">
        		</form><?php
	        }else{
        ?>
        <table border="1">
        	<tr>
        		<td>Nome do Subsistema</td>
        		<td>Nome do Sistema</td>
        		<td></td>
        		<td></td>
        	</tr>
        	<?php 
        		
        		foreach ($dados['sistema'] as $valores){
					
					foreach ($dados['subsistema'] as $val){
						
						if($valores->id == $val->idsistema){?>
        			<tr>
        				<td><?php echo $val->nome;?></td>
		        		<td><?php echo $valores->nome;?></td>
		        		<td><form method="POST" action="FormSubsistema2.php">
            					<input type="hidden" value="<?php echo $val->id;?>" name="idsubsistema">
            					<input type="hidden" value="<?php echo $val->nome;?>" name="nomesubsistema">
            					<input type="hidden" value="<?php echo $valores->id;?>" name="idsistema">
            					<input type="hidden" value="<?php echo $valores->nome;?>" name="nomesistema">
            					<input type="submit" value="Editar">
        					</form></td>
		        		<td><form action="../frm/ManagerSubsistema.php" method="POST">
		        			<input type="hidden" value="<?php echo $val->id;?>" name="id">
            				<input type="submit" value="Excluir" id="excluir" name="excluir">
            				</form>
        				</td>
        			</tr>
        		
        		<?php 	}
					}
				}
        	?>
        </table>
        
        <form method="LINK" action="FormSubsistema.php" style="margin-left: 20%;">
            <input type="submit" value="Novo Subsistema">
        </form>
        <?php }?>
        </div>
        <!-- Fim da div Subsistema -->
        
        <div id="casoUso" style="width:50%;float: right;margin-right:25%;display: none">
        <h3 style="">Caso de Uso</h3>
        <?php 
	        include_once '../frm/ManagerCasoUso.php';
	        $casoUso = new BdCasoUso();
	        $dados = $casoUso->listar();
	        $dados2 = $casoUso->listarSistema();
	        if(!$dados2) echo 'Não há Sistema/Subsistema cadastrados!';
	        if(!$dados){ 
	        	echo 'Não há Casos de Uso cadastrados!';?>
	        	<form method="LINK" action="FormCasoUso.php" style="margin-left: 20%;">
	        	<input type="submit" value="Novo Caso de Uso">
	        	</form><?php
	        }else{
        ?>
        <table border="1">
        	<tr>
        		<td>Nome do Caso de Uso</td>
        		<td>Nome do Sistema</td>
        		<td>Nome do Subsistema</td>
        		<td></td>
        		<td></td>
        	</tr>
        	<?php 
        		
        		foreach ($dados as $valores){?>
        			<tr>
        				<td><?php echo $valores->nomecasoUso;?></td>
		        		<td><?php echo $valores->nomesis;?></td>
		        		<td><?php echo $valores->nomesub;?></td>
		        		<td><form method="POST" action="FormCasoUso2.php">
            					<input type="hidden" value="<?php echo $valores->idcasoUso;?>" name="idcasoUso">
            					<input type="hidden" value="<?php echo $valores->nomecasoUso;?>" name="nomecasoUso">
            					<input type="hidden" value="<?php echo $valores->idsistema;?>" name="idsistema">
            					<input type="hidden" value="<?php echo $valores->nomesis;?>" name="nomesistema">
            					<input type="hidden" value="<?php echo $valores->idsubsistema;?>" name="idsubsistema">
            					<input type="hidden" value="<?php echo $valores->nomesub;?>" name="nomesubsistema">
            					<input type="submit" value="Editar">
        					</form></td>
		        		<td><form action="../frm/ManagerCasoUso.php" method="POST">
		        			<input type="hidden" value="<?php echo $valores->idcasoUso;?>" name="id">
            				<input type="submit" value="Excluir" id="excluir" name="excluir">
            				</form>
        				</td>
        			</tr>
        		
        		<?php
				}
        	?>
        </table>
        
        <form method="LINK" action="FormCasoUso.php" style="margin-left: 20%;">
            <input type="submit" value="Novo Caso de Uso">
        </form>
        <?php }?>
        </div>
        <!-- Fim da div Caso de Uso -->
        
        <div id="rnf" style="width:50%;float: right;margin-right:25%;display: none;">
        <h3 style="">Requisito Não-Funcional</h3>
        <?php include_once '../frm/ManagerRNF.php';
        		$rnf = new BdRNF();
        		$dados = $rnf->listar();
        		if($dados){?>
        <table border="1">
        	<tr>
        		<td>Nome do Requisito Não-Funcional</td>
        		<td></td>
        		<td></td>
        	</tr>
        	<?php
	        		foreach ($dados as $valores){?>
	        			<tr>
	        				<td><?php echo $valores->nome;?></td>
			        		<td><form method="POST" action="FormRNF2.php">
	            					<input type="hidden" value="<?php echo $valores->id;?>" name="idRNF">
	            					<input type="hidden" value="<?php echo $valores->nome;?>" name="nome">
	            					<input type="submit" value="Editar">
	        					</form></td>
			        		<td><form action="../frm/ManagerRNF.php" method="POST">
			        			<input type="hidden" value="<?php echo $valores->id;?>" name="idRNF">
	            				<input type="submit" value="Excluir" id="excluir" name="excluir">
	            				</form>
	        				</td>
	        			</tr>
	        		
	        		<?php }
        		}else{
        			echo 'Não há Requisitos Não-Funcionais Cadastrados!';
        		}
        	?>
        </table>
        <form method="LINK" action="FormRNF.php" style="margin-left: 20%;">
            <input type="submit" value="Novo Requisito Não-Funcional">
        </form>
        </div>
        <!-- Fim da div RNF -->
        
        <div id="atributo" style="width:50%;float: right;margin-right:25%;display: none">
        <h3 style="">Atributo</h3>
        <?php 
	        include_once '../frm/ManagerAtributo.php';
	        $atributo = new ManagerAtributo();
	        $dados = $atributo->listar();
	        if(!$dados['rnf']) echo 'Não há Requisitos Não-Funcionais cadastrados!';
	        else if(!$dados['atributos']){
	        	echo 'Não há Atributos cadastrados!';
	        	?><form method="LINK" action="FormAtributo.php" style="margin-left: 20%;">
	        		<input type="submit" value="Novo Atributo">
	        	</form><?php
	        }else{
        ?>
        <table border="1">
        	<tr>
        		<td>Nome do Atributo</td>
        		<td>Nome do Requisito Não-Funcional</td>
        		<td></td>
        		<td></td>
        	</tr>
        	<?php 
        		
        		foreach ($dados['rnf'] as $valores){
					
					foreach ($dados['atributos'] as $val){
						
						if($valores->id == $val->idRNF){?>
        			<tr>
        				<td><?php echo $val->nome;?></td>
		        		<td><?php echo $valores->nome;?></td>
		        		<td><form method="POST" action="FormAtributo2.php">
            					<input type="hidden" value="<?php echo $val->id;?>" name="id">
            					<input type="hidden" value="<?php echo $val->nome;?>" name="nome">
            					<input type="hidden" value="<?php echo $valores->id;?>" name="idRNF">
            					<input type="hidden" value="<?php echo $valores->nome;?>" name="nomernf">
            					<input type="submit" value="Editar">
        					</form></td>
		        		<td><form action="../frm/ManagerAtributo.php" method="POST">
		        			<input type="hidden" value="<?php echo $val->id;?>" name="id">
            				<input type="submit" value="Excluir" id="excluir" name="excluir">
            				</form>
        				</td>
        			</tr>
        		
        		<?php 	}
					}
				}
        	?>
        </table>
        
        <form method="LINK" action="FormAtributo.php" style="margin-left: 20%;">
            <input type="submit" value="Novo Atributo">
        </form>
        <?php }?>
        </div>
        <!-- Fim da div Atributo -->
        
        <div id="cenario" style="width:50%;float: right;margin-right:25%;display: none">
        <h3 style="">Cenário</h3>
        <?php 
	        include_once '../frm/ManagerCenario.php';
	        $cenario = new BdCenario();
	        $dados = $cenario->listarSistema();
	        $dados2 = $cenario->listar();
	        if(!$dados) echo 'Não há Sistema/Subsistema cadastrados!';
	        else{
        ?>
        <table border="1">
        	<tr>
        		<td>Nome do Sistema</td>
        		<td>Nome do Subsistema</td>
        		<td>Nome do Caso de Uso</td>
        		<td>Descrição do Cenário</td>
        		<td></td>
        		<td></td>
        	</tr>
        	<?php 
        		foreach ($dados2 as $valores){?>
        			<tr>
        				<td><?php echo $valores->nomesis;?></td>
		        		<td><?php echo $valores->nomesub;?></td>
		        		<td><?php echo $valores->nomecasoUso;?></td>
		        		<td><?php echo $valores->descricao;?></td>
		        		<td><form method="POST" action="FormCenario2.php">
            					<input type="hidden" value="<?php echo $valores->idcenario;?>" name="idcenario">
            					<input type="hidden" value="<?php echo $valores->nomesis;?>" name="nomesistema">
            					<input type="hidden" value="<?php echo $valores->nomesub;?>" name="nomesubsistema">
            					<input type="hidden" value="<?php echo $valores->nomecasoUso;?>" name="nomecasoUso">
            					<input type="submit" value="Editar">
        					</form></td>
		        		<td><form action="../frm/ManagerCenario.php" method="POST">
		        			<input type="hidden" value="<?php echo $valores->idcenario;?>" name="id">
            				<input type="submit" value="Excluir" id="excluir" name="excluir">
            				</form>
        				</td>
        			</tr>
        		
        		<?php 
				}
        	?>
        </table>
        <?php }?>
        <form method="LINK" action="FormCenario.php" style="margin-left: 20%;">
            <input type="submit" value="Novo Cenário">
        </form>
        
        </div>
        <!-- Fim da div Cenário -->
        
       <div id="fluxo" style="width:50%;float: right;margin-right:25%;display: none;">
        <h3 style="">Tipo de Fluxo</h3>
        <?php include_once '../frm/ManagerFluxo.php';
        		$fluxo = new BdFluxo();
        		$dados = $fluxo->listar();
        		if($dados){?>
        <table border="1">
        	<tr>
        		<td>Nome do Tipo</td>
        		<td>Descrição do Tipo</td>
        		<td></td>
        		<td></td>
        	</tr>
        	<?php
	        		foreach ($dados as $valores){?>
	        			<tr>
	        				<td><?php echo $valores->id;?></td>
	        				<td><?php echo $valores->descricao;?></td>
			        		<td><form method="POST" action="FormFluxo2.php">
	            					<input type="hidden" value="<?php echo $valores->id;?>" name="idfluxo">
	            					<input type="hidden" value="<?php echo $valores->descricao;?>" name="descricao">
	            					<input type="submit" value="Editar">
	        					</form></td>
			        		<td><form action="../frm/ManagerFluxo.php" method="POST">
			        			<input type="hidden" value="<?php echo $valores->id;?>" name="idfluxo">
	            				<input type="submit" value="Excluir" id="excluir" name="excluir">
	            				</form>
	        				</td>
	        			</tr>
	        		
	        		<?php }
        		}else{
        			echo 'Não há Fluxos Cadastrados!';
        		}
        	?>
        </table>
        <form method="LINK" action="FormFluxo.php" style="margin-left: 20%;">
            <input type="submit" value="Novo Fluxo">
        </form>
        </div>
        <!-- Fim da div Fluxo -->
        
        <div id="matriz" style="width:50%;float: right;margin-right:25%;display: none;">
        <h3 style="">Matriz</h3>
        <?php include_once '../frm/ManagerMatriz.php';
        		$matriz = new BdMatriz();
        		$dados = $matriz->listar();
        		if($dados){?>
        <table border="1">
        	<tr>
        		<td>Nome do Caso de Uso</td>
        		<td>Descrição do Cenário</td>
        		<td></td>
        	</tr>
        	<?php 
	        		foreach ($dados as $valores){?>
	        			<tr>
	        				<td><?php echo @$valores->nome;?></td>
	        				<td><?php echo @$valores->descricao;?></td>
			        		<td>
			        		<?php if($dados['rnf']){
			        				foreach ($dados['rnf'] as $val){
			        					if($val->idcenario == @$valores->idcenario){ ?>
			        				<form action="../frm/ManagerMatriz.php" method="POST">
				        			<input type="hidden" value="<?php echo $valores->idcenario;?>" name="idcenario">
				        			<input type="hidden" value="<?php echo $val->id;?>" name="idrnf">
				        			<?php echo $val->nome;?>
		            				<input type="submit" value="Visualizar" id="visualizar" name="visualizar">
		            				</form>
		            				<?php }
									}
			        		}?>
	        				</td>
	        			</tr>
	        		
	        		<?php }
        		}else{
        			echo 'Não há Matrizes Cadastrados!';
        		}
        	?>
        </table>
        </div>
        <!-- Fim da div Matriz -->
        <?php include "../frm/ManagerExibe.php";?>
        <div id="identifAspect" style="width:50%;float: right;margin-right:25%;display: none;">
        <h3 style="">Espalhamento de Aspectos</h3>
        
        <div style="width:20%;position: relative;background-color: gray;margin-bottom: -20px;position: relative;">
        	<a style="margin-left: 20%;cursor: pointer;" onclick="listar(1)">Sistema</a><br/>
        </div>
        <div style="width:20%;position: relative;background-color: gray; margin-left: 21%; margin-bottom: -20px;">
        	<a style="margin-left: 20%;cursor: pointer;" onclick="listar(2)">Subsistema</a><br/>
        </div>	
        <div style="width:20%;background-color: gray;margin-left: 42%;">
        	<a style="margin-left: 20%;cursor: pointer;" onclick="listar(3)">Caso de Uso</a><br/>
        </div>
        <div id="aspectsist" style="display: none;">
	        <form action="../frm/ManagerMatrizAux.php" method="POST" id="form1" name="form1">
	        <input type="hidden" name="acao" value="sistema">
			<table class="table" style="margin-left:35%;">
				              <thead>
				                <tr>
				                	<th></th>
				                  <th>Não Selecionados</th>
				                  <th></th>
				                  <th>Selecionados</th>
				                </tr>
				              </thead>
				             
				              <tbody>
				                <tr>
				                	<td valign="middle">Sistemas</td>
				     <?php $sistema = new BdSistema();
	        			   $dados = $sistema->listar();?>
				                	<td><select multiple id="idaspectsist" name="idaspectsist" size="5" style="width:100%;">
				    <?php foreach($dados as $valores) { ?>
				    <option value="<?php echo $valores->id?>" ondblclick="movimento('idaspectsist2', 'passar', 'idaspectsist');"><?php echo $valores->nome?></option>
					<?php } ?>
				    </select></td>
				    <td>
	                		<img class="icon-arrow-right" src="right-grey.png" onclick="movimento('idaspectsist2', 'passar', 'idaspectsist');"/>
	                		<br/>
		                	<img class="icon-arrow-left" src="left-grey.png" onclick="movimento('idaspectsist', 'passar', 'idaspectsist2');"/>
	                	</td>
				    <td><select multiple id="idaspectsist2" name="idaspectsist2[]" size="5" style="width:100%;"
	    					onDblClick="movimento('idaspectsist', 'passar', 'idaspectsist2');">
					</select></td>
	                </tr>
	                </tbody>
                </table>
                <div style="margin-left:45%;padding-bottom: 5%;">
                	<label>Requisito Não-Funcional</label><br/>
					<select name="idRNF" id="idRNF">
					<?php 
					$rnf = new BdExibe();
					$dados = $rnf->listar();
			
	            	foreach($dados as $valores){?>
						<option value="<?php echo $valores->id?>"><?php echo $valores->nome?></option>
					<?php }?>
					</select>
				</div>
             	<button onclick="return submitFormFiltroS()" style="margin-left: 45%;">Verificar Espalhamento</button>
        	</form>
        </div>
        
        <!-- Fim da Div aspectsist -->
        
        <div id="aspectsub" style="display: none;">
	        <form action="../frm/ManagerMatrizAux.php" method="POST" id="form2" name="form2">
	        <input type="hidden" name="acao" value="subsistema">
			<table class="table" style="margin-left:35%;">
				              <thead>
				                <tr>
				                	<th></th>
				                  <th>Não Selecionados</th>
				                  <th></th>
				                  <th>Selecionados</th>
				                </tr>
				              </thead>
				             
				              <tbody>
				                <tr>
				                	<td valign="middle">Subsistemas</td>
				     <?php $subsistema = new BdSubsistema();
	        			   $dados = $subsistema->listar();?>
				                	<td><select multiple id="idaspectsubsist" name="idaspectsubsist" size="5" style="width:100%;">
				    <?php foreach($dados['subsistema'] as $valores) { ?>
				    <option value="<?php echo $valores->id?>" ondblclick="movimento('idaspectsubsist2', 'passar', 'idaspectsubsist');"><?php echo $valores->nome?></option>
					<?php } ?>
				    </select></td>
				    <td>
	                		<img class="icon-arrow-right" src="right-grey.png" onclick="movimento('idaspectsubsist2', 'passar', 'idaspectsubsist');"/>
	                		<br/>
		                	<img class="icon-arrow-left" src="left-grey.png" onclick="movimento('idaspectsubsist', 'passar', 'idaspectsubsist2');"/>
	                	</td>
				    <td><select multiple id="idaspectsubsist2" name="idaspectsubsist2[]" size="5" style="width:100%;"
	    					onDblClick="movimento('idaspectsubsist', 'passar', 'idaspectsubsist2');">
					</select></td>
	                </tr>
	                </tbody>
                </table>
                <div style="margin-left:45%;padding-bottom: 5%;">
                	<label>Requisito Não-Funcional</label><br/>
					<select name="idRNF" id="idRNF">
					<?php
					$rnf = new BdExibe();
					$dados = $rnf->listar();
			
	            	foreach($dados as $valores){?>
						<option value="<?php echo $valores->id?>"><?php echo $valores->nome?></option>
					<?php }?>
					</select>
				</div>
             	<button onclick="return submitFormFiltroSub()" style="margin-left: 45%;">Verificar Espalhamento</button>
        	</form>
        </div>
        
        <!-- Fim da div aspectsub -->
        
        <div id="aspectcasoUso" style="display: none;">
	        <form action="../frm/ManagerMatrizAux.php" method="POST" id="form3" name="form3">
	        <input type="hidden" name="acao" value="casoUso">
			<table class="table" style="margin-left:35%;">
				              <thead>
				                <tr>
				                	<th></th>
				                  <th>Não Selecionados</th>
				                  <th></th>
				                  <th>Selecionados</th>
				                </tr>
				              </thead>
				             
				              <tbody>
				                <tr>
				                	<td valign="middle">Casos de Uso</td>
				     <?php $casoUso = new BdCasoUso();
	        			   $dados = $casoUso->listar();?>
				                	<td><select multiple id="idaspectcasoUso" name="idaspectcasoUso" size="5" style="width:100%;">
				    <?php foreach($dados as $valores) { ?>
				    <option value="<?php echo $valores->idcasoUso?>" ondblclick="movimento('idaspectcasoUso2', 'passar', 'idaspectcasoUso');"><?php echo $valores->nomecasoUso?></option>
					<?php } ?>
				    </select></td>
				    <td>
	                		<img class="icon-arrow-right" src="right-grey.png" onclick="movimento('idaspectcasoUso2', 'passar', 'idaspectcasoUso');"/>
	                		<br/>
		                	<img class="icon-arrow-left" src="left-grey.png" onclick="movimento('idaspectcasoUso', 'passar', 'idaspectcasoUso2');"/>
	                	</td>
				    <td><select multiple id="idaspectcasoUso2" name="idaspectcasoUso2[]" size="5" style="width:100%;"
	    					onDblClick="movimento('idaspectcasoUso', 'passar', 'idaspectcasoUso2');">
					</select></td>
	                </tr>
	                </tbody>
                </table>
                <div style="margin-left:45%;padding-bottom: 5%;">
                	<label>Requisito Não-Funcional</label><br/>
					<select name="idRNF" id="idRNF">
					<?php
					$rnf = new BdExibe();
					$dados = $rnf->listar();
			
	            	foreach($dados as $valores){?>
						<option value="<?php echo $valores->id?>"><?php echo $valores->nome?></option>
					<?php }?>
					</select>
				</div>
             	<button onclick="return submitFormFiltroCas()" style="margin-left: 45%;">Verificar Espalhamento</button>
        	</form>
        </div>
        
        <!-- Fim da div aspectcasoUso -->
        
        </div>
        <script>
			function listar(j){
				if(j == 1){
					document.getElementById("aspectcasoUso").style.display = "none";
					document.getElementById("aspectsub").style.display = "none";
					document.getElementById("aspectsist").style.display = "block";
				}
				if(j == 2){
					document.getElementById("aspectcasoUso").style.display = "none";
					document.getElementById("aspectsist").style.display = "none";
					document.getElementById("aspectsub").style.display = "block";
				}
				if(j == 3){
					document.getElementById("aspectcasoUso").style.display = "block";
					document.getElementById("aspectsist").style.display = "none";
					document.getElementById("aspectsub").style.display = "none";
				}
			}

			function passar()
			{
				var sel_pai = document.getElementById(arguments[2]);
			    var selecionados = new Array();
				
				if (!sel_pai) 
					return;
				len = sel_pai.options.length;
				
			    for (i = 0; i < len; i++) 
				{
			      	if (sel_pai.options[i].selected) 
					{
			           	sel.options[sel.options.length] = new Option(sel_pai.options[i].text, sel_pai.options[i].value);
			           	selecionados.push(i);
			        }
				}
			    len = selecionados.length;
			    for (i = len-1; i >= 0; i--) 
					sel_pai.options[selecionados[i]] = null;
			}

			function movimento(elemento, direcao) 
			{
				sel = document.getElementById(elemento);
			    var len, i;
			    
				if (!sel) 
					return;
			    if (direcao == 'passar' && arguments[2] == undefined) 
					return;
				else if (direcao == 'passar') 
					passar(arguments[0], arguments[1], arguments[2]);
				else if (direcao == 'cima' || direcao == 'baixo') 
					posicao(direcao);	
			}

			function submitFormFiltroS()
			{
				if(document.getElementById('idaspectsist2').options.length < 2){
					alert("É necessário escolher no mínimo dois sistemas para verificar o espalhamento!");
					return false;
				}else{
					for(i=0;i<document.getElementById('idaspectsist2').options.length;i++)
						document.getElementById('idaspectsist2').options[i].selected = true;
					
					document.formVincular.submit();
				}
			}

			function submitFormFiltroSub()
			{
				if(document.getElementById('idaspectsubsist2').options.length < 2){
					alert("É necessário escolher no mínimo dois subsistemas para verificar o espalhamento!");
					return false;
				}else{
					for(i=0;i<document.getElementById('idaspectsubsist2').options.length;i++)
						document.getElementById('idaspectsubsist2').options[i].selected = true;
					document.formVincular.submit();
				}
			}

			function submitFormFiltroCas()
			{
				if(document.getElementById('idaspectcasoUso2').options.length < 2){
					alert("É necessário escolher no mínimo dois casos de uso para verificar o espalhamento!");
					return false;
				}else{
					for(i=0;i<document.getElementById('idaspectcasoUso2').options.length;i++)
						document.getElementById('idaspectcasoUso2').options[i].selected = true;
					document.formVincular.submit();
				}
			}
        </script>
        <!-- Fim da div Identificacao Aspectos -->
        
        <div id="cenarioAspect" style="width:50%;float: right;margin-right:25%;display: none">
        <h3>Cenário com Aspecto</h3>
        <?php 
	        include_once '../frm/ManagerCenario.php';
	        $cenario = new BdCenario();
	        $dados = $cenario->listarSistema();
	        $dados2 = $cenario->listar();
	        if(!$dados) echo 'Não há Sistema/Subsistema cadastrados!';
	        else{
        ?>
        <table border="1">
        	<tr>
        		<td>Nome do Sistema</td>
        		<td>Nome do Subsistema</td>
        		<td>Nome do Caso de Uso</td>
        		<td>Descrição do Cenário</td>
        		<td></td>
        	</tr>
        	<?php 
        		foreach ($dados2 as $valores){?>
        			<tr>
        				<td><?php echo $valores->nomesis;?></td>
		        		<td><?php echo $valores->nomesub;?></td>
		        		<td><?php echo $valores->nomecasoUso;?></td>
		        		<td><?php echo $valores->descricao;?></td>
		        		<td><form method="POST" action="../frm/ManagerCenarioAspecto.php">
            					<input type="hidden" value="<?php echo $valores->idcenario;?>" name="idcenario">
            					<input type="submit" value="Visualizar" name="acao">
        					</form>
        				</td>
        			</tr>
        		
        		<?php 
				}
        	?>
        </table>
        <?php }?>
        </div>
        <!-- Fim da div Cenário Aspecto -->
        
        <div id="Aspecto" style="width:50%;float: right;margin-right:25%;display: none">
        <h3 style="">Tipos de Aspectos</h3>
        <?php 
	        include_once '../frm/ManagerExibe.php';
	        $exibe = new BdExibe();
	        $dados = $exibe->listar();
	        if(!$dados) echo 'Não há Requisitos Não-Funcionais Cadastrados!';
	        else{
        ?>
        <table border="1">
        	<tr>
        		<td>Nome do Requisito Não-Funcional</td>
        		<td></td>
        	</tr>
        	<?php 
        		foreach ($dados as $valores){?>
        			<tr>
        				<td><?php echo $valores->nome;?></td>
		        		<td><form method="POST" action="../frm/ManagerExibe.php">
            					<input type="hidden" value="<?php echo $valores->id;?>" name="idRNF">
            					<input type="submit" value="Visualizar" name="acao">
        					</form>
        				</td>
        			</tr>
        		
        		<?php 
				}
        	?>
        </table>
        <?php }?>
        </div>
        <!-- Fim da div Aspectos Identificados -->
    </div>
    </body>
</html>
