<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro de Cenário</title>
        <meta http-equiv="Content-Type" content="text/html;">
    </head>
    <?php 	include '../bd/BdSubsistema.php';
		$subsistema = new BdSubsistema();
		$dados = $subsistema->listar();
		include_once '../bd/BdcasoUso.php';
		$casoUso = new BdCasoUso();
		$dados2 = $casoUso->listar();
		?>
	<script>
	
	var sistema = new Array();
	var subsistema = new Array();
	var casoUso = new Array();
	
	<?php
	for($i=0; $i<count($dados['sistema']); $i++)
	{
		echo "\n\n sistema[$i] = new Array();";
		echo "\n sistema[$i]['id'] = '".$dados['sistema'][$i]->id."';";
		echo "\n sistema[$i]['nome'] = '".$dados['sistema'][$i]->nome."';";
	}
	?>
	
	
	/***************************************************************************************************/
	<?php
	for($i=0; $i<count($dados['subsistema']); $i++)
	{
		echo "\n\n subsistema[$i] = new Array();";
		echo "\n subsistema[$i]['id'] = '".$dados['subsistema'][$i]->id."';";
		echo "\n subsistema[$i]['nome'] = '".$dados['subsistema'][$i]->nome."';";
		echo "\n subsistema[$i]['idsistema'] = '".$dados['subsistema'][$i]->idsistema."';";
	}
	?>

	<?php
			for($i=0; $i<count($dados2); $i++)
			{
				echo "\n\n casoUso[$i] = new Array();";
				echo "\n casoUso[$i]['id'] = '".$dados2[$i]->idcasoUso."';";
				echo "\n casoUso[$i]['nome'] = '".$dados2[$i]->nomecasoUso."';";
				echo "\n casoUso[$i]['idsubsistema'] = '".$dados2[$i]->idsubsistema."';";
			}
			
	?>
	
	function moveSub(idsistema){
		var varsist = document.getElementById('idsistema');
		var varsubs = document.getElementById('idsubsistema');
		var select = document.getElementById('idsubsistema');
		for (var option in select){
		    select.remove(option);
		}
		for(j=0;j<subsistema.length;j++)
		{
			if(subsistema[j]['idsistema'] == varsist.value)
			{
				var option = document.createElement('OPTION');
				varsubs.appendChild(option);
				option.value = subsistema[j]['id'];
				option.text  = subsistema[j]['nome'];
				option.addEventListener("click", moveCas);
				
			}
		}
	}

	function moveCas(){
		var varcas = document.getElementById('idcasoUso');
		var varsubs = document.getElementById('idsubsistema');
		var select = document.getElementById('idcasoUso');
		for (var option in select){
		    select.remove(option);
		}
		for(j=0;j<casoUso.length;j++)
		{
			if(casoUso[j]['idsubsistema'] == varsubs.value)
			{
				var option = document.createElement('OPTION');
				varcas.appendChild(option);
				option.value = casoUso[j]['id'];
				option.text  = casoUso[j]['nome'];
			}
		}
	}
	</script>
    <body>
        <h1 style="margin-left: 37%">Cadastro de Cenário</h1>
         <form action="../frm/ManagerCenario.php" method="POST">
         <div style="margin-left:40%;">
             <label>Sistema</label><br/>
			<select name="idsistema" id="idsistema">
			<?php
			foreach($dados['sistema'] as $valores){?>
				<option value="<?php echo $valores->id?>" onclick="moveSub(<?php echo $valores->id?>)"><?php echo $valores->nome?></option>
			<?php }?>
			</select><br/>
			<label>Subsistema</label><br/>
			
			<select name="idsubsistema" id="idsubsistema" >
			</select><br/>
            <label>Nome do Caso de Uso</label><br/>
            <select name="idcasoUso" id="idcasoUso">
            </select>
			</div>
            <table style="margin-left: 20%;">
                
                <tr>
                    <td >Breve Descritivo:</td>
                    <td ><textarea name="descricao" cols="50" rows="2" id="descricao"></textarea></td>
                    
                </tr>
                <?php 
                include_once '../frm/ManagerFluxo.php';
                $fluxo = new BdFluxo();
                $dados = $fluxo->listar();
                foreach ($dados as $valores){?>
                <tr>
                    <td ><?php echo $valores->id?> - <?php echo $valores->descricao?></td>
                    <td ></td>
                    
                </tr>
                <!--<tr>
	               	<td >P1</td><input type="hidden" name="passo+<?php echo $valores->id?>" value="1" id="theValue+<?php echo $valores->id?>">
	                <td ><textarea name="passoDesc+<?php echo $valores->id?>" cols="50" rows="2" id="passo1"></textarea></td>
	                <td ><input type="button" value="Vincular"><input type="button" value="Editar"><input type="button" value="Excluir"></td>
	            </tr>-->
	            <input type="hidden" name="passo<?php echo $valores->id?>" value="0" id="theValue<?php echo $valores->id?>">
               	<tr id="myDiv<?php echo $valores->id?>">
               	</tr>
                <tr>
                    <td ><input type="button" value="Adicionar" id="add" name="add" onclick="addElement<?php echo $valores->id?>()"></td>
                    
                </tr>
                <?php }?>
            </table>
                <input type="submit" value="Gravar" id="gravar" name="gravar" style="margin-left: 40% ;">
         </form>
    </body>
    <script type="text/javascript">
    <?php 
    foreach ($dados as $valores){?>
    	function addElement<?php echo $valores->id?>() {
			
		  var ni = document.getElementById('myDiv<?php echo $valores->id?>');

    	  var numi = document.getElementById('theValue<?php echo $valores->id?>');

    	  var num = (document.getElementById('theValue<?php echo $valores->id?>').value -1)+ 2;

    	  numi.value = num;

    	  var newtr = document.createElement('tr');
    	  
    	  //var divIdName = 'my'+num+'Div';

    	  //newdiv.setAttribute('id',divIdName);

    	  newtr.innerHTML = '<td>P'+num+'<input type="hidden" value="'+num+'" name="passo<?php echo $valores->id?>"></td><td><textarea name="passoDesc<?php echo $valores->id?>+'+num+'" cols="50" rows="2" id="passo'+num+'"></textarea></td><td ><form method="POST" action="FormVincular.php"><input type="hidden" value="'+num+'" name="passo<?php echo $valores->id?>"><input type="submit" value="Vincular"></form><input type="button" value="Excluir"></td>';
		  //newtr.innerHTML;
    	  ni.appendChild(newtr);

    	}
   <?php }?>
    </script>
</html>