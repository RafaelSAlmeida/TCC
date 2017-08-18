<!DOCTYPE html>
<html>
<head>
<title>Tipo de Fluxo</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
</head>
<body>
	<h1 style="margin-left: 45%">Tipo de Fluxo</h1>
		<form style="margin-left: 45%;" action="../frm/ManagerFluxo.php" method="POST">
			<label>Nome do Tipo</label><br/>
			<input type="text" readonly="readonly" value="<?php echo $_POST['idfluxo']?>">
			<input type="hidden" value="<?php echo $_POST['idfluxo']?>" name="idfluxo1">
			<br/><label>Editar Nome</label><br/>
			<input type="text" value="" id="idfluxo" name="idfluxo" maxlength="2"><br/>
			<label>Descrição</label><br/>
			<input type="text" readonly="readonly" value="<?php echo $_POST['descricao']?>">
			<br/><label>Editar Descrição</label><br/>
			<input type="text" value="" id="descricao" name="descricao"><br/>
            <br/><input type="submit" value="Editar" id="editar" name="editar">
            <!--<input type="submit" value="Excluir" id="excluir" name="excluir">-->
        </form>
    </body>
</html>
