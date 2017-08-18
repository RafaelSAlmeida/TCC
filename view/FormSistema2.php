<!DOCTYPE html>
<html>
<head>
<title>Sistema</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
</head>
<body>
	<h1 style="margin-left: 45%">Sistema</h1>
		<form style="margin-left: 45%;" action="../frm/ManagerSistema.php" method="POST">
			<!--<label>Selecione o Sistema</label><br/>
			<select name="idsistema" id="idsistema">
			<?php include '../bd/BdSistema.php';
			$sistema = new BdSistema();
			$dados = $sistema->listar();
			
	            	foreach($dados as $valores){?>
						<option value="<?php echo $valores->id?>"><?php echo $valores->nome?></option>
					<?php }?>
					</select>-->
			<br/><label>Editar Nome</label><br/>
			<input type="text" value="<?php echo $_POST['nomesistema']?>" id="nome" name="nome"><br/>
			<input type="hidden" value="<?php echo $_POST['idsistema']?>" id="idsistema" name="idsistema"><br/>
            <br/><input type="submit" value="Editar" id="editar" name="editar">
            <!--<input type="submit" value="Excluir" id="excluir" name="excluir">-->
        </form>
    </body>
</html>
