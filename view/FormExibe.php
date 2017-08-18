<!DOCTYPE html>
<html>
    <head>
        <title>Tipos de Aspectos</title>
        <meta http-equiv="Content-Type" content="text/html;">
    </head>
 	<body>
    	<h1 style="margin-left: 40%">Tipos de Aspectos</h1>
    	<div style="margin-left: 30%">
	    	<table border="1">
	    		<tr>
	    			<td align="center" style="width: 406px;"><b><?php echo $retorno['passos'][0]->nomeRNF?></b></td>
	    		</tr>
	    	</table>
	    	<table border="1">
	    		
	    		<?php foreach ($retorno['passos'] as $passo){?>
		    		<tr>
		    			<td style="width: 200px;"><?php echo $passo->nomecasoUso." - ".$passo->idfluxo." P".$passo->nrPasso?></td>
		    			<td style="width: 200px;">
		    			<?php foreach($retorno['atributo'] as $atributo){
		    					if($passo->idfluxo == $atributo->idfluxo && $passo->nomecasoUso == $atributo->nomecasoUso && $passo->nrPasso == $atributo->nrPasso){
		    						echo $atributo->alias." ";
		    					}
		    				}?>
		    			</td>
		    		</tr>
		    	<?php }?>
	    	</table>
    	</div>
    </body>
</html>