<!DOCTYPE html>
<html>
    <head>
        <title>Cenário com Aspecto</title>
        <meta http-equiv="Content-Type" content="text/html;">
    </head>
 	<body>
    	<h1 style="margin-left: 40%">Cenário com Aspecto</h1>
    	<div style="margin-left: 30%">
	    	<table border="1">
	    		<tr>
	    			<td align="center" style="width: 150px;"><b><?php echo "UC".$retorno['dados'][0]->idcasoUso?></b></td>
	    			<td align="center" style="width: 350px;"><b><?php echo $retorno['dados'][0]->nomecasoUso?></b></td>
	    		</tr>
	    	</table>
	    	<table border="1">
	    		<tr>
	    			<td style="width: 506px;"><b>Breve Descritivo:</b> <?php echo $retorno['dados'][0]->cenarioDescr?></td>
	    		</tr>
	    		<?php foreach ($retorno['fluxo'] as $fluxo){?>
		    		<tr>
		    			<td><b><?php echo $fluxo->descricao?></b></td>
		    		</tr>
		    			<?php foreach($retorno['passos'] as $passos){
		    					if($passos->idfluxo == $fluxo->id){?>
		    					<tr>
		    						<td><b><?php echo "P".$passos->nrPasso?></b> - <?php echo $passos->passoDescr?><b><i>
		    						<?php foreach ($retorno['dados'] as $dados){
		    								if($dados->idfluxo == $passos->idfluxo && $dados->nrPasso == $passos->nrPasso){
		    									echo " Join point";
											}
		    							  }
		    							?></i></b>
		    						</td>
		    					<?php }?>
		    			<?php }?>
		    		</tr>
	    		<?php }?>
	    		<tr>
		    		<td><b>Tipos de Aspectos</b></td>
		    	</tr>
		    	<?php foreach ($retorno['rnf'] as $rnf){?>
			    	<tr>
			    		<td>
			    			<?php echo $rnf->nomeRNF?>
			    		</td>
			    	</tr>
			    <?php }?>
	    	</table>
    	</div>
    </body>