<!DOCTYPE html>
<html>
<head>
<title>Caso de Uso</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<?php 	include '../bd/BdSubsistema.php';
		$subsistema = new BdSubsistema();
		$dados = $subsistema->listar();?>
<script>

var sistema = new Array();
var subsistema = new Array();

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

function moveSub(idsistema){
	var varsist = document.getElementById('idsistema');
	var varsubs = document.getElementById('idsubsistema');
	var select = document.getElementById('idsubsistema');
	for (var option in select){
	    select.remove(option);
	}
	for(j=0;j<subsistema.length-1;j++)
	{
		if(subsistema[j]['idsistema'] == varsist.value)
		{
			var option = document.createElement('OPTION');
			varsubs.appendChild(option);
			option.value = subsistema[j]['id'];
			option.text  = subsistema[j]['nome'];
			
		}
	}
}
</script>
<body>
	<h1 style="margin-left: 40%">Caso de Uso</h1>
		<form style="margin-left: 45%;" action="../frm/ManagerCasoUso.php" method="POST">
			
			<label>Sistema</label><br/>
			<select name="idsistema" id="idsistema">
			<option value="<?php echo $_POST['idsistema']?>"><?php echo $_POST['nomesistema']?></option>
			<?php
			foreach($dados['sistema'] as $valores){?>
				<option value="<?php echo $valores->id?>" onclick="moveSub(<?php echo $valores->id?>)"><?php echo $valores->nome?></option>
			<?php }?>
			</select><br/>
			<label>Subsistema</label><br/>
			<select name="idsubsistema" id="idsubsistema">
			<option value="<?php echo $_POST['idsubsistema']?>"><?php echo $_POST['nomesubsistema']?></option>
			<?php
			/*foreach($dados['subsistema'] as $valores) if($valores->idsistema){?>
				<option value="<?php echo $valores->id?>"><?php echo $valores->nome?></option>
			<?php }*/?>
			</select>
            <br/>
            <label>Nome do Caso de Uso</label><br/>
            <input type="text" readonly="readonly" value="<?php echo $_POST['nomecasoUso'];?>" name="nome">
			<input type="hidden" name="id" value="<?php echo $_POST['idcasoUso'] ?>">
			<br/><label>Editar Nome</label><br/>
			<input type="text" value="" id="nome" name="nome"><br/>
			
            <br/><input type="submit" value="Editar" id="editar" name="editar">
        </form>
    </body>
</html>
