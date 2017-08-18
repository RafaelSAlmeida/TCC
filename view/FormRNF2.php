<!DOCTYPE html>
<html>
<head>
<title>Requisito Não-Funcional</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
</head>
<body>
	<h1 style="margin-left: 45%">Requisito Não-Funcional</h1>
		<form style="margin-left: 45%;" action="../frm/ManagerRNF.php" method="POST">
			<label>Selecione o Requisito Não-Funcional</label><br/>
			<input type="text" readonly="readonly" value="<?php echo $_POST['nome']?>">
			<br/><label>Editar Nome</label><br/>
			<input type="text" value="" id="nome" name="nome"><br/>
			<input type="hidden" value="<?php echo $_POST['idRNF']?>" id="idRNF" name="idRNF">
            <br/><input type="submit" value="Editar" id="editar" name="editar">
            <!--<input type="submit" value="Excluir" id="excluir" name="excluir">-->
        </form>
    </body>
</html>
