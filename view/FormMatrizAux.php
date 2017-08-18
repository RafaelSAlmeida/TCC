<!DOCTYPE html>
<html>
    <head>
        <title>Matriz Auxiliar</title>
        <meta http-equiv="Content-Type" content="text/html;">
    </head>
 	<body>
    	<h1 style="margin-left: 40%">Matriz Auxiliar</h1>
    	<div style="margin-left: 30%">
	    	<div style="margin-left: 10%"><h3><?php echo 'Requisito Não-Funcional: '.$retorno['dados'][0]->rnf?></h2></div>
	    	<div style="margin-left: 10%"><h3><?php foreach ($retorno['nome'] as $key=>$nome){
	    		if($key < count($retorno['nome'])-1){
	    			echo $retorno['tipo'].': '.$nome->nome." - ";
	    		}else{
	    			echo $nome->nome;
	    		}
	    	}?></h2></div>
	    	<table border="1">
	    		<tr>
	    			<td></td>
	    		<?php foreach ($retorno['atributo'] as $atr){?>
	    			<td><?php echo $atr->alias;?></td>    		
	    		<?php }?>
	    		</tr>
	    		<?php foreach ($retorno['passos'] as $passo){?>
	    		<tr>
	    			<td><?php echo $passo->nomecasouso.' - '.$passo->idfluxo.''.$passo->nrPasso;?></td>
	    			<?php foreach ($retorno['atributo'] as $a){?>
	    					
	    				<td><?php foreach ($retorno['dados'] as $dados){
	    							foreach ($retorno['conta'] as $conta){
		    							if($dados->idatr == $a->id && $dados->idfluxo.''.$dados->nrPasso == $passo->idfluxo.''.$passo->nrPasso 
											&& $dados->idcasoUso == $passo->idcasoUso && $conta->id == $a->id && $conta->conta > 1){?>
		    								<img src="../view/none.gif"/>
										<?php break;}
									}
	    						}?>
	    				</td>
	    			<?php 
						}?>
	    		</tr>
	    		<?php }?>
	    	</table>
    	</div>
    </body>