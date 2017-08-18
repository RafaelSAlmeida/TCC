<!DOCTYPE html>
<html>
<head>
<title>Subsistema</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
	<h1 style="margin-left: 40%">Subsistema</h1>
		<form style="margin-left: 45%;" action="../frm/ManagerSubsistema.php" method="POST">
			<label>Nome do Subsistema</label><br/>
			<input type="text" value="" id="nome" name="nome"><br/>
			<label>Sistema</label><br/>
			<select name="idsistema" id="idsistema">
			<?php include '../bd/BdSistema.php';
			$sistema = new BdSistema();
			$dados = $sistema->listar();
			
	            	foreach($dados as $valores){?>
						<option value="<?php echo $valores->id?>"><?php echo $valores->nome?></option>
					<?php }?>
					</select>
            <br/><input type="submit" value="Gravar" id="gravar" style="margin-left: 40px;" name="gravar">
        </form>
    </body>
</html>
