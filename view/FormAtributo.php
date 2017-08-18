<!DOCTYPE html>
<html>
<head>
<title>Atributo</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
</head>
<body>
	<h1 style="margin-left: 45%">Atributo</h1>
		<form style="margin-left: 45%;" action="../frm/ManagerAtributo.php" method="POST">
			<label>Requisito Não-Funcional</label><br/>
			<select name="idRNF" id="idRNF">
			<?php include '../bd/BdRNF.php';
			$rnf = new BdRNF();
			$dados = $rnf->listar();
			
	            	foreach($dados as $valores){?>
						<option value="<?php echo $valores->id?>"><?php echo $valores->nome?></option>
					<?php }?>
					</select>
			<br/><label>Nome do Atributo</label><br/>
			<input type="text" value="" id="nome" name="nome"><br/>
			<label>Alias</label><br/>
			<input type="text" value="" id="alias" name="alias" maxlength="4"><br/>
			
            <br/><input type="submit" value="Gravar" id="gravar" style="margin-left: 40px;" name="gravar">
        </form>
    </body>
</html>
