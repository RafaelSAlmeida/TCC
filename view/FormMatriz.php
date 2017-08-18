<!DOCTYPE html>
<html>
    <head>
        <title>Matriz</title>
        <meta http-equiv="Content-Type" content="text/html;">
    </head>
 	<body>
    	<h1 style="margin-left: 40%">Matriz</h1>
    	<div style="margin-left: 30%">
	    	<div style="margin-left: 10%"><?php echo $retorno['dados'][0]->nomecasouso.' - '.$retorno['dados'][0]->rnf?></div>
	    	<table border="1">
	    		<tr>
	    			<td></td>
	    		<?php foreach ($retorno['atributo'] as $atr){?>
	    			<td><?php echo $atr->alias;?></td>    		
	    		<?php }?>
	    		</tr>
	    		<?php foreach ($retorno['passos'] as $passo){?>
	    		<tr>
	    			<td><?php echo $passo->idfluxo.''.$passo->nrPasso;?></td>
	    			<?php foreach ($retorno['atributo'] as $a){?>
	    					
	    				<td><?php foreach ($retorno['dados'] as $dados){
	    							if($dados->idatr == $a->id && $dados->idfluxo.''.$dados->nrPasso == $passo->idfluxo.''.$passo->nrPasso){?>
	    								<img src="../view/none.gif"/>
									<?php }
	    						}?>
	    				</td>
	    			<?php 
						}?>
	    		</tr>
	    		<?php }?>
	    	</table>
    	</div>
    </body>