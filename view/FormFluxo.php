<!DOCTYPE html>
<html>
<head>
	<title>Tipo de Fluxo</title>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
</head>
<body>
	<h1 style="margin-left: 40%">Tipo de Fluxo</h1>
		<form style="margin-left: 45%;" action="../frm/ManagerFluxo.php" method="POST">
			<label>Nome do Tipo (M�ximo duas letras)</label><br/>
			<input type="text" value="" id="nome" name="nome" maxlength="2"><br/>
			<label>Descri��o</label><br/>
			<input type="text" value="" id="descricao" name="descricao" maxlength="30"><br/>
			<input type="submit" value="Gravar" id="gravar" name="gravar" style="margin-left: 40px;">
		</form>
</body>
</html>
