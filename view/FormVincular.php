<!DOCTYPE html>
<html>
    <head>
        <title>Vincular Atributos de Requisitos Não-Funcionais</title>
        <meta http-equiv="Content-Type" content="text/html;">
    </head>
    <?php 	include '../bd/BdAtributo.php';
		$atributo = new BdAtributo();
		$dados = $atributo->listar();?>
<script>

var rnf = new Array();
var atributo = new Array();

<?php
for($i=0; $i<count($dados['rnf']); $i++)
{
	echo "\n\n rnf[$i] = new Array();";
	echo "\n rnf[$i]['id'] = '".$dados['rnf'][$i]->id."';";
	echo "\n rnf[$i]['nome'] = '".$dados['rnf'][$i]->nome."';";
}
?>


/***************************************************************************************************/
<?php
for($i=0; $i<count($dados['atributos']); $i++)
{
	echo "\n\n atributo[$i] = new Array();";
	echo "\n atributo[$i]['id'] = '".$dados['atributos'][$i]->id."';";
	echo "\n atributo[$i]['nome'] = '".$dados['atributos'][$i]->nome."';";
	echo "\n atributo[$i]['idRNF'] = '".$dados['atributos'][$i]->idRNF."';";
}
?>

function moveAtr(idrnf){
	
	var departamentoN1 = document.getElementById('idrnf2');
	var departamentoN2 = document.getElementById('idatr2');
	var departamentoPaiN2 = document.getElementById('idatr');

	for(i=departamentoN2.options.length-1; i>=0; i--)
	{
		aux = 1;
		for(j=0; j<departamentoN1.options.length;j++)
		{
			for(k=0; k<atributo.length;k++)
			{
				if(atributo[k]['id'] == departamentoN2.options[i].value && departamentoN1.options[j].value == atributo[k]['idRNF'])
					aux = 0;
			}
		}
		
		if(aux == 1)
			departamentoN2.remove(i);
	}
	for(i=departamentoPaiN2.options.length-1; i>=0; i--)
		departamentoPaiN2.remove(i);

	for(i=0;i<departamentoN1.options.length; i++)
	{
		for(j=0;j<atributo.length;j++)
		{
			if(atributo[j]['idRNF'] == departamentoN1.options[i].value)
			{
				aux = 1;
				for(k=0;k<departamentoN2.options.length; k++)
				{
					if(departamentoN2.options[k].value == atributo[j]['id'])				
						aux = 0;
				}
				
				if(aux)
				{
					var option = document.createElement('OPTION');
					departamentoN2.appendChild(option);
					departamentoPaiN2.appendChild(option);
					option.value = atributo[j]['id'];
					option.text  = atributo[j]['nome'];
				}
			}
		}

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

function submitFormFiltro()
{
	for(i=0;i<document.getElementById('idrnf2').options.length;i++)
		document.getElementById('idrnf2').options[i].selected = true;
	for(i=0;i<document.getElementById('idatr2').options.length;i++){
		document.getElementById('idatr2').options[i].selected = true;
		
	}
	
	document.formVincular.submit();
}
</script>
    <body>
        <h1 style="margin-left: 30%">Vincular Atributos de Requisitos Não-Funcionais</h1>
        <form action="../frm/ManagerPasso.php" method="POST" id="formVincular" name="formVincular">
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
			              
			              
			              <!-- dept -->
			              
			                <tr>
			                	<td valign="middle">Requisitos Não-Funcionais</td>
			                	
			                	<td><select multiple id="idrnf" name="idrnf" size="5" style="width:100%;">
			    <?php foreach($dados['rnf'] as $valores) { ?>
			    <option value="<?php echo $valores->id?>" ondblclick="movimento('idrnf2', 'passar', 'idrnf'); moveAtr(<?php echo $valores->id?>);"><?php echo $valores->nome?></option>
				<?php } ?>
			    </select></td>
			    <td>
                		<img class="icon-arrow-right" src="right-grey.png" onclick="movimento('idrnf2', 'passar', 'idrnf'); moveAtr(<?php echo $valores->id?>);"/>
                		<br/>
	                	<img class="icon-arrow-left" src="left-grey.png" onclick="movimento('idrnf', 'passar', 'idrnf2'); moveAtr(<?php echo $valores->id?>);"/>
                	</td>
			    <td><select multiple id="idrnf2" name="idrnf2" size="5" style="width:100%;"
    					onDblClick="movimento('idrnf', 'passar', 'idrnf2'); moveAtr(<?php echo $valores->id?>);">
				</select></td>
                </tr>
                
                <tr>
                	<td valign="middle">Atributo</td>
                	
                	<td><select multiple id="idatr" name="idatr" size="5" onDblClick="movimento('idatr2', 'passar', 'idatr')" style="width:100%;">
				    <? foreach($dados['atributos'] as $key => $value){ ?>
    				<option value="<?=$value['id'];?>" <?= $_POST['atributos']?in_array($value['id'], $_POST['atributos'])?"selected":"":""?><?=$value['nome'];?></option>
					<? } ?>
					</select></td>
                	<td>
                		<img class="icon-arrow-right" src="right-grey.png" onclick="movimento('idatr2', 'passar', 'idatr');"/>
                		<br/>
	                	<img class="icon-arrow-left" src="left-grey.png" onclick="movimento('idatr', 'passar', 'idatr2');"/>
                	</td>
                	<td><select multiple id="idatr2" name="idatr2[]" size="5" onDblClick="movimento('idatr', 'passar', 'idatr2')" style="width:100%;" /></select></td>
                </tr>
                <?php include_once '../frm/ManagerFluxo.php';
                $fluxo = new BdFluxo();
                $dados = $fluxo->listar();
                foreach ($dados as $valores){
					if(@$_POST['passo'.$valores->id.'']){	?>
                <input type="hidden" name="fluxo" id="fluxo" value="<?php echo $valores->id?>">
                <input type="hidden" name="passo" id="passo" value="<?php echo $_POST['passo'.$valores->id.'']?>">
                <?php }
				}?>
				<input type="hidden" name="vincular" id="vincular" value="Vincular">
                </tbody>
                </table>
                <button onclick="submitFormFiltro()" style="margin-left: 45%;">Vincular</button>
        </form>
    </body>
</html>