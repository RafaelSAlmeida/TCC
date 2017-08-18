<!DOCTYPE html>
<html>
<head>
<title>Atributos</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
</head>
<body>
	<h1 style="margin-left: 45%">Atributo</h1>
		<form style="margin-left: 45%;" action="../frm/ManagerAtributo.php" method="POST">
			<label>Selecione o Requisito Não-Funcional</label><br/>
			<select name="idRNF" id="idRNF">
			<option value="<?php echo $_POST['idRNF']?>"><?php echo $_POST['nomernf']?></option>
			<?php include '../bd/BdAtributo.php';
			$atributos = new BdAtributo();
			$dados = $atributos->listar();
			
	            	foreach($dados['rnf'] as $valores){?>
						<option value="<?php echo $valores->id?>"><?php echo $valores->nome?></option>
					<?php }?>
					</select>
			<br/><label>Atributo</label><br/>
			<input type="text" readonly="readonly" value="<?php echo $_POST['nome'];?>" name="nome">
			<input type="hidden" name="id" value="<?php echo $_POST['id'] ?>">
			<br/><label>Editar Nome</label><br/>
			<input type="text" value="" id="nome" name="nome"><br/>
			
            <br/><input type="submit" value="Editar" id="editar" name="editar">
            
        </form>
    </body>
</html>
