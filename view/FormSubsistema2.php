<!DOCTYPE html>
<html>
<head>
<title>Subsistema</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
</head>
<body>
	<h1 style="margin-left: 45%">Subsistema</h1>
		<form style="margin-left: 45%;" action="../frm/ManagerSubsistema.php" method="POST">
			<label>Selecione o Sistema</label><br/>
			<select name="idsistema" id="idsistema">
			<option value="<?php echo $_POST['idsistema']?>"><?php echo $_POST['nomesistema']?></option>
			<?php include '../bd/BdSubsistema.php';
			$subsistema = new BdSubsistema();
			$dados = $subsistema->listar();
			
	            	foreach($dados['sistema'] as $valores){?>
						<option value="<?php echo $valores->id?>"><?php echo $valores->nome?></option>
					<?php }?>
					</select>
			<br/><label>Subsistema</label><br/>
			<input type="text" readonly="readonly" value="<?php echo $_POST['nomesubsistema'];?>" name="nome">
			<input type="hidden" name="id" value="<?php echo $_POST['idsubsistema'] ?>">
			<br/><label>Editar Nome</label><br/>
			<input type="text" value="" id="nome" name="nome"><br/>
			
            <br/><input type="submit" value="Editar" id="editar" name="editar">
            
        </form>
    </body>
</html>
